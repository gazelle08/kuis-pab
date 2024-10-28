<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SiswaEkskulResource\Pages;
use App\Filament\Resources\SiswaEkskulResource\RelationManagers;
use App\Models\SiswaEkskul;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;


class SiswaEkskulResource extends Resource
{
    protected static ?string $model = SiswaEkskul::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Select::make('siswa_id')
                ->relationship('siswa', 'nama')
                ->required(),
            Select::make('ekskul_id')
                ->relationship('ekskul', 'nama_ekskul')
                ->required(),
            TextInput::make('tanggal_daftar')->required(),
            Select::make('status')
                ->options([
                    'aktif' => 'Aktif',
                    'tidak aktif' => 'Tidak Aktif',
                    'menunggu konfirmasi' => 'Menunggu Konfirmasi',
                ])
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('siswa.nama')->label('Nama Siswa'),
                TextColumn::make('ekskul.nama_ekskul')->label('Nama Ekskul'),
                TextColumn::make('tanggal_daftar'),
                TextColumn::make('status'),
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
            'index' => Pages\ListSiswaEkskuls::route('/'),
            'create' => Pages\CreateSiswaEkskul::route('/create'),
            'edit' => Pages\EditSiswaEkskul::route('/{record}/edit'),
        ];
    }
}
