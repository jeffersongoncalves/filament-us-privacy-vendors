<?php

namespace JeffersonGoncalves\Filament\UsPrivacyVendors\Resources\Vendors;

use BackedEnum;
use Filament\Actions\ActionGroup;
use Filament\Actions\EditAction;
use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Panel;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use JeffersonGoncalves\Filament\UsPrivacyVendors\Resources\Vendors\Pages\CreateVendor;
use JeffersonGoncalves\Filament\UsPrivacyVendors\Resources\Vendors\Pages\EditVendor;
use JeffersonGoncalves\Filament\UsPrivacyVendors\Resources\Vendors\Pages\ListVendors;
use JeffersonGoncalves\Filament\UsPrivacyVendors\UsPrivacyVendorsPlugin;
use JeffersonGoncalves\UsPrivacyVendors\Enums\VendorIssue;
use JeffersonGoncalves\UsPrivacyVendors\Enums\VendorRisk;
use JeffersonGoncalves\UsPrivacyVendors\Enums\VendorRole;
use JeffersonGoncalves\UsPrivacyVendors\Models\Vendor;

class VendorResource extends Resource
{
    protected static ?string $model = Vendor::class;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->columns(2)
            ->components([
                TextInput::make('name')
                    ->label(static::label('fields.name'))
                    ->required()
                    ->maxLength(255),
                TextInput::make('contact')
                    ->label(static::label('fields.contact'))
                    ->maxLength(255),
                Select::make('role')
                    ->label(static::label('fields.role'))
                    ->options(static::enumOptions(VendorRole::cases(), 'roles'))
                    ->required()
                    ->live(),
                Select::make('risk')
                    ->label(static::label('fields.risk'))
                    ->options(static::enumOptions(VendorRisk::cases(), 'risks'))
                    ->default(VendorRisk::Medium->value)
                    ->required(),
                Textarea::make('services')
                    ->label(static::label('fields.services'))
                    ->columnSpanFull(),
                Textarea::make('business_purpose')
                    ->label(static::label('fields.business_purpose'))
                    ->helperText(static::label('help.business_purpose'))
                    ->columnSpanFull(),
                TagsInput::make('data_categories')
                    ->label(static::label('fields.data_categories'))
                    ->columnSpanFull(),
                Section::make(static::label('sections.agreement'))
                    ->description(static::label('help.agreement'))
                    ->columns(2)
                    ->columnSpanFull()
                    ->schema([
                        DatePicker::make('dpa_signed_at')
                            ->label(static::label('fields.dpa_signed_at')),
                        DatePicker::make('dpa_expires_at')
                            ->label(static::label('fields.dpa_expires_at')),
                        CheckboxList::make('dpa_checklist')
                            ->label(static::label('fields.dpa_checklist'))
                            ->options(fn (Get $get): array => static::checklist($get('role')))
                            // Stored as {item: true}; the CheckboxList works with a list of ticked items.
                            ->afterStateHydrated(fn (CheckboxList $component, ?Vendor $record) => $component->state(
                                array_keys(array_filter($record->dpa_checklist ?? [], fn (mixed $ticked): bool => $ticked === true)),
                            ))
                            ->dehydrateStateUsing(fn (?array $state): array => array_fill_keys($state ?? [], true))
                            ->columnSpanFull(),
                    ]),
                Textarea::make('notes')
                    ->label(static::label('fields.notes'))
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label(static::label('fields.name'))
                    ->searchable()
                    ->sortable(),
                TextColumn::make('role')
                    ->label(static::label('fields.role'))
                    ->formatStateUsing(fn (VendorRole $state): string => static::label("roles.{$state->value}"))
                    ->badge()
                    ->color('gray'),
                TextColumn::make('risk')
                    ->label(static::label('fields.risk'))
                    ->formatStateUsing(fn (VendorRisk $state): string => static::label("risks.{$state->value}"))
                    ->color(fn (VendorRisk $state): string => match ($state) {
                        VendorRisk::Low => 'success',
                        VendorRisk::Medium => 'warning',
                        VendorRisk::High => 'danger',
                    })
                    ->badge()
                    ->sortable(),
                TextColumn::make('issues')
                    ->label(static::label('fields.issues'))
                    ->state(fn (Vendor $record): array => array_map(fn (VendorIssue $issue): string => static::label("issues.{$issue->value}"), $record->issues()))
                    ->badge()
                    ->color('danger')
                    ->placeholder(static::label('fields.no_issues')),
                TextColumn::make('next_review')
                    ->label(static::label('fields.next_review'))
                    ->state(fn (Vendor $record): ?string => $record->terminated_at === null ? $record->nextReviewAt()->toDateString() : null)
                    ->date()
                    ->placeholder('-'),
            ])
            ->defaultSort('name')
            ->filters([
                SelectFilter::make('role')
                    ->label(static::label('fields.role'))
                    ->options(static::enumOptions(VendorRole::cases(), 'roles')),
                SelectFilter::make('risk')
                    ->label(static::label('fields.risk'))
                    ->options(static::enumOptions(VendorRisk::cases(), 'risks')),
                TernaryFilter::make('active')
                    ->label(static::label('filters.active'))
                    ->default(true)
                    ->queries(
                        true: fn (Builder $query): Builder => $query->whereNull('terminated_at'),
                        false: fn (Builder $query): Builder => $query->whereNotNull('terminated_at'),
                    ),
            ])
            ->recordActions([
                EditAction::make(),
                ActionGroup::make(VendorActions::all()),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListVendors::route('/'),
            'create' => CreateVendor::route('/create'),
            'edit' => EditVendor::route('/{record}/edit'),
        ];
    }

    /**
     * @param  list<\UnitEnum&BackedEnum>  $cases
     * @return array<string, string>
     */
    public static function enumOptions(array $cases, string $group): array
    {
        return collect($cases)
            ->mapWithKeys(fn (BackedEnum $case): array => [(string) $case->value => static::label("{$group}.{$case->value}")])
            ->all();
    }

    /**
     * Contract terms the role requires (config('us-privacy-vendors.checklist')), translated when the plugin knows the key.
     *
     * @return array<string, string>
     */
    public static function checklist(mixed $role): array
    {
        $role = $role instanceof VendorRole ? $role : VendorRole::tryFrom((string) $role);
        $items = [];

        foreach ($role?->checklist() ?? [] as $key => $description) {
            $translation = "filament-us-privacy-vendors::filament-us-privacy-vendors.checklist.{$key}";
            $items[(string) $key] = trans()->has($translation) ? __($translation) : (string) $description;
        }

        return $items;
    }

    public static function label(string $key): string
    {
        return __("filament-us-privacy-vendors::filament-us-privacy-vendors.{$key}");
    }

    public static function getModelLabel(): string
    {
        return static::label('resource.label');
    }

    public static function getPluralModelLabel(): string
    {
        return static::label('resource.plural_label');
    }

    public static function getNavigationGroup(): ?string
    {
        return UsPrivacyVendorsPlugin::get()->getNavigationGroup();
    }

    public static function getNavigationSort(): ?int
    {
        return UsPrivacyVendorsPlugin::get()->getNavigationSort();
    }

    public static function getNavigationIcon(): string|BackedEnum|null
    {
        return UsPrivacyVendorsPlugin::get()->getNavigationIcon();
    }

    public static function getSlug(?Panel $panel = null): string
    {
        return UsPrivacyVendorsPlugin::get()->getSlug();
    }
}
