<?php

namespace JeffersonGoncalves\Filament\UsPrivacyVendors\Tests;

use BladeUI\Heroicons\BladeHeroiconsServiceProvider;
use BladeUI\Icons\BladeIconsServiceProvider;
use Filament\Actions\ActionsServiceProvider;
use Filament\Facades\Filament;
use Filament\FilamentServiceProvider;
use Filament\Forms\FormsServiceProvider;
use Filament\Infolists\InfolistsServiceProvider;
use Filament\Notifications\NotificationsServiceProvider;
use Filament\Schemas\SchemasServiceProvider;
use Filament\Support\SupportServiceProvider;
use Filament\Tables\TablesServiceProvider;
use Filament\Widgets\WidgetsServiceProvider;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use JeffersonGoncalves\Filament\UsPrivacyVendors\Tests\Fixtures\TestPanelProvider;
use JeffersonGoncalves\Filament\UsPrivacyVendors\Tests\Fixtures\TestUser;
use JeffersonGoncalves\Filament\UsPrivacyVendors\UsPrivacyVendorsServiceProvider;
use JeffersonGoncalves\PestPluginDatabaseMigrations\LoadsPackageMigrations;
use JeffersonGoncalves\UsPrivacyVendors\UsPrivacyVendorsServiceProvider as VendorsServiceProvider;
use Livewire\LivewireServiceProvider;
use Livewire\Mechanisms\DataStore;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    use LoadsPackageMigrations;

    protected function setUp(): void
    {
        parent::setUp();

        // Filament v5 binds Livewire's DataStore with bind() instead of singleton(): keep one instance per test.
        app()->instance(DataStore::class, app(DataStore::class));

        Filament::setCurrentPanel(Filament::getDefaultPanel());

        $this->withoutVite();
    }

    protected function getPackageProviders($app): array
    {
        return [
            LivewireServiceProvider::class,
            BladeIconsServiceProvider::class,
            BladeHeroiconsServiceProvider::class,
            SupportServiceProvider::class,
            SchemasServiceProvider::class,
            FormsServiceProvider::class,
            TablesServiceProvider::class,
            ActionsServiceProvider::class,
            InfolistsServiceProvider::class,
            NotificationsServiceProvider::class,
            WidgetsServiceProvider::class,
            FilamentServiceProvider::class,
            VendorsServiceProvider::class,
            UsPrivacyVendorsServiceProvider::class,
            TestPanelProvider::class,
        ];
    }

    protected function defineEnvironment($app): void
    {
        $app['config']->set('app.key', 'base64:'.base64_encode(str_repeat('a', 32)));
        $app['config']->set('database.default', 'testing');
        $app['config']->set('auth.providers.users.model', TestUser::class);
    }

    protected function defineDatabaseMigrations(): void
    {
        $this->loadPackageMigrations(VendorsServiceProvider::class);

        Schema::create('users', function (Blueprint $table): void {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('password')->default('');
            $table->rememberToken();
        });
    }
}
