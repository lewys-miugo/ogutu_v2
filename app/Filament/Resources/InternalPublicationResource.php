<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InternalPublicationResource\Pages;
use App\Filament\Resources\InternalPublicationResource\RelationManagers;
use App\Models\InternalPublication;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class InternalPublicationResource extends Resource
{
    protected static ?string $model = InternalPublication::class;

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
                        ])->required(),
                    Forms\Components\TextInput::make('title')->required(),
                    Forms\Components\TextInput::make('tag')->required(),
                    Forms\Components\TextInput::make('time')->required(),
                    Forms\Components\FileUpload::make('image')->required(),
                    Forms\Components\RichEditor::make('content')->required()
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('type'),
                Tables\Columns\TextColumn::make('tag'),
                Tables\Columns\TextColumn::make('time'),
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\ImageColumn::make('image')
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
            'index' => Pages\ListInternalPublications::route('/'),
            'create' => Pages\CreateInternalPublication::route('/create'),
            'edit' => Pages\EditInternalPublication::route('/{record}/edit'),
        ];
    }
}
