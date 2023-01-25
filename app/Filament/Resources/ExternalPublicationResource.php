<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExternalPublicationResource\Pages;
use App\Filament\Resources\ExternalPublicationResource\RelationManagers;
use App\Models\ExternalPublication;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class ExternalPublicationResource extends Resource
{
    protected static ?string $model = ExternalPublication::class;

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
                    Forms\Components\TextInput::make('link')->required()
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
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageExternalPublications::route('/'),
        ];
    }
}
