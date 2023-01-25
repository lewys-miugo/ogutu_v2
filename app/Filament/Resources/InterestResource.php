<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InterestResource\Pages;
use App\Filament\Resources\InterestResource\RelationManagers;
use App\Models\Interest;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class InterestResource extends Resource
{
    protected static ?string $model = Interest::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\Card::make()->schema([
                    Forms\Components\TextInput::make('title')->required(),
                    Forms\Components\RichEditor::make('content')->required()
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('content')->limit('60'),
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
            'index' => Pages\ManageInterests::route('/'),
        ];
    }
}
