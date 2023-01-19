<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InternalReflectionResource\Pages;
use App\Filament\Resources\InternalReflectionResource\RelationManagers;
use App\Models\InternalReflection;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class InternalReflectionResource extends Resource
{
    protected static ?string $model = InternalReflection::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\Card::make()->schema([
                    Forms\Components\TextInput::make('title')->required(),
                    Forms\Components\TextInput::make('tag')->required(),
                    Forms\Components\FileUpload::make('image')->image()->required(),
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
                Tables\Columns\TextColumn::make('tag'),
                Tables\Columns\ImageColumn::make('image'),
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
            'index' => Pages\ListInternalReflections::route('/'),
            'create' => Pages\CreateInternalReflection::route('/create'),
            'edit' => Pages\EditInternalReflection::route('/{record}/edit'),
        ];
    }
}
