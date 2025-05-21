<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PageCommentsResource\Pages;
use App\Filament\Resources\PageCommentsResource\RelationManagers;
use App\Models\PageComments;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PageCommentsResource extends Resource
{
    protected static ?string $model = PageComments::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Textarea::make('comment')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('page_id')
                    ->relationship('page', 'title')
                    ->required()
                    ->searchable()
                    ->preload()
                    ->placeholder('Select Page')
                    ->label('Page'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('page.title')
                    ->sortable()
                    ->searchable()
                    ->placeholder('No Page'),
                Tables\Columns\TextColumn::make('comment')
                    ->sortable()
                    ->searchable()
                    ->placeholder('No Comment'),
            ])
            ->filters([
                //
            ])
            ->actions([
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPageComments::route('/'),
            'create' => Pages\CreatePageComments::route('/create'),
            'edit' => Pages\EditPageComments::route('/{record}/edit'),
        ];
    }
}