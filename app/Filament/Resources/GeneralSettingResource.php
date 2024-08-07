<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GeneralSettingResource\Pages;
use App\Models\GeneralSetting;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;

class GeneralSettingResource extends Resource
{
    protected static ?string $model = GeneralSetting::class;

    protected static ?string $navigationIcon = 'heroicon-o-wrench-screwdriver';

    protected static ?int $navigationSort = 9;


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('General Settings')
                ->schema([
                    TextInput::make('email')->required(),
                    TextInput::make('phone_no')->required(),
                    FileUpload::make('favicon_image')
                        ->image()
                        ->imageEditor()
                        ->required(),
                    FileUpload::make('logo_image')
                        ->image()
                        ->imageEditor()
                        ->required(),
                    Textarea::make('short_address')
                        ->required(),
                    Textarea::make('address')
                        ->required(),
                    TextInput::make('facebook_link')->required(),
                    TextInput::make('twitter_link'),
                    TextInput::make('instagram_link'),
                    TextInput::make('linkedin_link'),
                ])->columns(3),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getNavigationUrl(): string
    {
        // Assuming you want to edit the first record in the GeneralSetting model
        $firstRecord = GeneralSetting::first();
        
        if ($firstRecord) {
            return Pages\EditGeneralSetting::getUrl(['record' => $firstRecord->id]);
        }

        // If no record exists, redirect to the create page or list page as a fallback
        return Pages\ListGeneralSettings::getUrl();
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListGeneralSettings::route('/'),
            'create' => Pages\CreateGeneralSetting::route('/create'),
            'view' => Pages\ViewGeneralSetting::route('/{record}'),
            'edit' => Pages\EditGeneralSetting::route('/{record}/edit'),
        ];
    }
}
