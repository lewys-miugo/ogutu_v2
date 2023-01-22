<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExternalReflectionResource\Pages;
use App\Filament\Resources\ExternalReflectionResource\RelationManagers;
use App\Models\ExternalReflection;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class ExternalReflectionResource extends Resource
{
    protected static ?string $model = ExternalReflection::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\Card::make()->schema([
                    Forms\Components\TextInput::make('title')->required(),
                    Forms\Components\TextInput::make('tag')->required(),
                    Forms\Components\TextInput::make('time')->required(),

                    Forms\Components\FileUpload::make('image')->image()->required(),
                    Forms\Components\TextInput::make('link')->required()
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('tag'),
                Tables\Columns\TextColumn::make('time'),

                Tables\Columns\ImageColumn::make('image'),
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
            'index' => Pages\ManageExternalReflections::route('/'),
        ];
    }
}
