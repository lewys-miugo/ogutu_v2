<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BioResource\Pages;
use App\Filament\Resources\BioResource\RelationManagers;
use App\Models\Bio;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class BioResource extends Resource
{
    protected static ?string $model = Bio::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-circle';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Card::make()->schema([
                    TextInput::make('name')->required(),
                    FileUpload::make('picture')->image()->required(),
                    RichEditor::make('about')->required(),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListBios::route('/'),
            'create' => Pages\CreateBio::route('/create'),
            'edit' => Pages\EditBio::route('/{record}/edit'),
        ];
    }
}
