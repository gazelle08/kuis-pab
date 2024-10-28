<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EkskulResource\Pages;
use App\Filament\Resources\EkskulResource\RelationManagers;
use App\Models\Ekskul;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;

class EkskulResource extends Resource
{
    protected static ?string $model = Ekskul::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                TextInput::make('nama_ekskul')->required(),
                TextInput::make('pembina')->required(),
                TextInput::make('jadwal')->required(),
                TextInput::make('ruangan')->required(),
                TextInput::make('kuota')->required(),
                TextInput::make('deskripsi')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('nama_ekskul'),
                TextColumn::make('pembina'),
                TextColumn::make('jadwal'),
                TextColumn::make('ruangan'),
                TextColumn::make('kuota'),
                TextColumn::make('deskripsi'),
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
            'index' => Pages\ListEkskuls::route('/'),
            'create' => Pages\CreateEkskul::route('/create'),
            'edit' => Pages\EditEkskul::route('/{record}/edit'),
        ];
    }
}
