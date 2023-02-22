<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PageResource\Pages;
use App\Filament\Resources\PageResource\RelationManagers;
use App\Models\Page;
use Awcodes\Curator\Components\Forms\CuratorPicker;
use Camya\Filament\Forms\Components\TitleWithSlugInput;
use Filament\Forms;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Tabs;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use FilamentTiptapEditor\TiptapEditor;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class PageResource extends Resource
{
    protected static ?string $model = Page::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make(1)
                    ->schema([
                        Tabs::make('Heading')
                            ->tabs([
                                Tabs\Tab::make('La page')
                                    ->schema([
                                        Forms\Components\TextInput::make('ordering_number')
                                            ->numeric()
                                            ->minValue(1)
                                            ->placeholder(Page::count() + 1)
                                            ->required(),
                                        TitleWithSlugInput::make(
                                            fieldTitle: 'title',
                                            fieldSlug: ('slug'),
                                            slugSlugifier: fn($string) => Str::slug($string),
                                        ),
                                        Forms\Components\TextInput::make('subtitle'),
                                        TiptapEditor::make('introduction'),
                                        TiptapEditor::make('content')->required(),
                                    ]),
                                Tabs\Tab::make('Infos')
                                    ->schema([
                                        CuratorPicker::make('thumbnail')->required(),
                                        Forms\Components\TextInput::make('thumbnail_alt')->required(),
                                    ]),
                            ])
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('ordering_number')->sortable(),
                Tables\Columns\TextColumn::make('title')->sortable()->searchable(),
                Tables\Columns\ToggleColumn::make('is_home_page')->sortable(),
                Tables\Columns\ToggleColumn::make('is_active')->sortable()->label('Publié'),
            ])
            ->filters([
                //
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
            'index' => Pages\ListPages::route('/'),
            'create' => Pages\CreatePage::route('/create'),
            'edit' => Pages\EditPage::route('/{record}/edit'),
        ];
    }
}
