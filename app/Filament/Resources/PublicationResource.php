<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PublicationResource\Pages;
use App\Filament\Resources\PublicationResource\RelationManagers;
use App\Models\Publication;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class PublicationResource extends Resource
{
    protected static ?string $model = Publication::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\Card::make()->schema([
                    Forms\Components\Select::make('type')
                        ->options([
                            "global_trade" => "Global Trade & Investment",
                            "global_sustainability" => "Global Sustainability"
                        ]),
                    Forms\Components\TextInput::make('title'),
                    Forms\Components\TextInput::make('link')
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('type'),
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('link')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManagePublications::route('/'),
        ];
    }
}
