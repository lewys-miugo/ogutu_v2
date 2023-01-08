<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactResource\Pages;
use App\Filament\Resources\ContactResource\RelationManagers;
use App\Models\Contact;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;

    protected static ?string $navigationIcon = 'heroicon-o-at-symbol';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Card::make()->schema([
                    Select::make('type')
                        ->options([
                            'phone_number' => 'Phone Number',
                            'social' => 'Social Media',
                            'email' => 'Email Address'
                        ])->reactive(),
                    TextInput::make('phone_number')
                        ->hidden(fn(\Closure $get) => $get('type') !== 'phone_number'),
                    TextInput::make('link')
                        ->label('Social Media Link')
                        ->hidden(fn(\Closure $get) => $get('type') !== 'social'),
                    TextInput::make('email')
                        ->hidden(fn(\Closure $get) => $get('type') !== 'email')
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('type'),
                Tables\Columns\TextColumn::make('phone_number')->label('Phone Number'),
                Tables\Columns\TextColumn::make('email')->label('Email Address'),
                Tables\Columns\TextColumn::make('link')->label('Social Media Link')


//                Tables\Columns\TextColumn::make('email')->hidden(fn(\Closure $get) => $get('email') !== null)->label('Value'),
//                Tables\Columns\TextColumn::make('social')->hidden(fn(\Closure $get) => $get('social') !== null)->label('Value'),
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
            'index' => Pages\ManageContacts::route('/'),
        ];
    }
}
