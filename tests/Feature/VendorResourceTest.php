<?php

use JeffersonGoncalves\Filament\UsPrivacyVendors\Resources\Vendors\Pages\CreateVendor;
use JeffersonGoncalves\Filament\UsPrivacyVendors\Resources\Vendors\Pages\EditVendor;
use JeffersonGoncalves\Filament\UsPrivacyVendors\Resources\Vendors\Pages\ListVendors;
use JeffersonGoncalves\Filament\UsPrivacyVendors\Resources\Vendors\VendorResource;
use JeffersonGoncalves\Filament\UsPrivacyVendors\Tests\Fixtures\TestUser;
use JeffersonGoncalves\Filament\UsPrivacyVendors\UsPrivacyVendorsPlugin;
use JeffersonGoncalves\UsPrivacyVendors\Enums\VendorRole;
use JeffersonGoncalves\UsPrivacyVendors\Models\Vendor;
use Livewire\Livewire;

beforeEach(function () {
    $this->actingAs(TestUser::create(['name' => 'DPO', 'email' => 'dpo@example.com']));
});

it('creates a processor with its contract checklist', function () {
    Livewire::test(CreateVendor::class)
        ->fillForm([
            'name' => 'Stripe',
            'role' => 'processor',
            'risk' => 'high',
            'business_purpose' => 'Payment processing',
            'dpa_signed_at' => '2026-01-10',
            'dpa_checklist' => ['instructions', 'confidentiality'],
        ])
        ->call('create')
        ->assertHasNoFormErrors();

    expect(Vendor::sole())
        ->role->toBe(VendorRole::Processor)
        ->business_purpose->toBe('Payment processing')
        ->dpa_checklist->toBe(['instructions' => true, 'confidentiality' => true]);
});

it('requires a name and a role', function () {
    Livewire::test(CreateVendor::class)
        ->fillForm(['name' => '', 'role' => null])
        ->call('create')
        ->assertHasFormErrors(['name' => 'required', 'role' => 'required']);
});

it('lists vendors with their issues', function () {
    $vendor = Vendor::create(['name' => 'Mailer', 'role' => VendorRole::Processor]);

    Livewire::test(ListVendors::class)
        ->assertCanSeeTableRecords([$vendor])
        ->assertSee('No signed contract');
});

it('edits the checklist, keeping the stored map', function () {
    $vendor = Vendor::create(['name' => 'Analytics', 'role' => VendorRole::Processor, 'dpa_signed_at' => now(), 'dpa_checklist' => ['instructions' => true]]);

    Livewire::test(EditVendor::class, ['record' => $vendor->getKey()])
        ->assertFormSet(['dpa_checklist' => ['instructions']])
        ->assertSee('Binds every person processing the data to a duty of confidentiality')
        ->fillForm(['dpa_checklist' => ['instructions', 'delete_or_return']])
        ->call('save')
        ->assertHasNoFormErrors();

    expect($vendor->fresh()->dpa_checklist)->toBe(['instructions' => true, 'delete_or_return' => true]);
});

it('reviews, terminates and confirms the data return', function () {
    $vendor = Vendor::create(['name' => 'Old CRM', 'role' => VendorRole::Processor]);

    Livewire::test(EditVendor::class, ['record' => $vendor->getKey()])->callAction('review');
    expect($vendor->fresh()->reviewed_at)->not->toBeNull();

    Livewire::test(EditVendor::class, ['record' => $vendor->getKey()])->callAction('terminate');
    expect($vendor->fresh()->terminated_at)->not->toBeNull();

    Livewire::test(EditVendor::class, ['record' => $vendor->getKey()])->callAction('dataReturned');
    expect($vendor->fresh()->issues())->toBe([]);
    expect($vendor->fresh()->data_returned_at)->not->toBeNull();
});

it('asks no contract of third parties', function () {
    $vendor = Vendor::create(['name' => 'Ad network', 'role' => VendorRole::ThirdParty]);

    Livewire::test(ListVendors::class)
        ->assertCanSeeTableRecords([$vendor])
        ->assertDontSee('No signed contract');
});

it('applies the fluent plugin options', function () {
    UsPrivacyVendorsPlugin::get()->navigationGroup('US')->slug('suppliers');

    expect(VendorResource::getNavigationGroup())->toBe('US')
        ->and(VendorResource::getSlug())->toBe('suppliers');
});
