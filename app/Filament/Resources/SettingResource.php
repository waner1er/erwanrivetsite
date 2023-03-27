<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SettingResource\Pages;
use App\Filament\Resources\SettingResource\RelationManagers;
use App\Models\Setting;
use Awcodes\Curator\Components\Forms\CuratorPicker;
use Filament\Forms;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use FilamentTiptapEditor\TiptapEditor;
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
                Forms\Components\TextInput::make('title'),
                CuratorPicker::make('img'),
                Forms\Components\TextInput::make('img_alt'),
                Forms\Components\TextInput::make('description'),
                Forms\Components\TextInput::make('about_title'),
                TiptapEditor::make('about'),
                Forms\Components\TextInput::make('author'),
                Forms\Components\TextInput::make('email'),
                Forms\Components\TextInput::make('phone'),
                Forms\Components\TextInput::make('address'),
//                Repeater::make('social_media')
//                    ->schema([
//                        TextInput::make('social_url')->required(),
//                        Select::make('social_icon')
//                            ->options([
//                                'facebook' => 'Facebook',
//                                'twitter' => 'Twitter',
//                                'github' => 'Github',
//                                'linkedin' => 'Linkedin',
//                            ])
//                            ->required(),
//                        CuratorPicker::make('custom_social_icon'),
//                    ])->nullable()
//                    ->columns(1)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
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
