<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SettingResource\Pages;
use App\Filament\Resources\SettingResource\RelationManagers;
use App\Models\Setting;
use Awcodes\Curator\Components\Forms\CuratorPicker;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SettingResource extends Resource
{
    protected static ?string $model = Setting::class;

    protected static ?int $navigationSort = 3;

    protected static ?string $navigationIcon = 'heroicon-o-adjustments';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\TextInput::make('settings_order')
                    ->numeric(),
                Forms\Components\Toggle::make('active_settings'),
                Forms\Components\TextInput::make('site_title')
                    ->maxLength(255),
                CuratorPicker::make('site_img'),
                Forms\Components\TextInput::make('site_img_alt'),
                Forms\Components\TextInput::make('site_description')
                    ->maxLength(255),
                Forms\Components\TextInput::make('site_keywords')
                    ->maxLength(255),
                Forms\Components\TextInput::make('site_author')
                    ->maxLength(255),
                Forms\Components\TextInput::make('site_email')
                    ->maxLength(255),
                Forms\Components\TextInput::make('site_phone')
                    ->maxLength(255),
                Forms\Components\TextInput::make('site_address')
                    ->maxLength(255),
                Forms\Components\TextInput::make('site_facebook')
                    ->maxLength(255),
                Forms\Components\TextInput::make('site_twitter')
                    ->maxLength(255),
                Forms\Components\TextInput::make('site_instagram')
                    ->maxLength(255),
                Forms\Components\TextInput::make('site_linkedin')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('site_title'),
                Tables\Columns\TextColumn::make('settings_order'),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
                Tables\Columns\ToggleColumn::make('active_settings')
            ])
            ->filters([
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }


    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSettings::route('/'),
            'create' => Pages\CreateSetting::route('/create'),
            'edit' => Pages\EditSetting::route('/{record}/edit'),
        ];
    }
}
