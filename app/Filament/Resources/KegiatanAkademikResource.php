<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KegiatanAkademikResource\Pages;
use App\Filament\Resources\KegiatanAkademikResource\RelationManagers;
use App\Models\KegiatanAkademik;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KegiatanAkademikResource extends Resource
{
    protected static ?string $model = KegiatanAkademik::class;
    protected static ?string $navigationGroup = 'Akademik';
    protected static ?string $navigationLabel = 'Kegiatan Akademik'; // Mengubah nama sidebar
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Textarea::make('nama_kegiatan')
                    ->label('Nama Kegiatan')
                    ->required(),
                TextInput::make('link')
                    ->label('Link')
                    ->required(),
                DatePicker::make('tanggal_pelaksanaan')
                    ->label('Tanggal Pelaksanaan')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_kegiatan')
                    ->limit(50)
                    ->label('Nama Kegiatan')
                    ->wrap()
                    ->searchable(),
                TextColumn::make('link')
                    ->limit(50)
                    ->wrap()
                    ->label('Link')
                    ->searchable(),
                TextColumn::make('tanggal_pelaksanaan')
                    ->label('Tanggal Pelaksanaan')
                    ->searchable()
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageKegiatanAkademiks::route('/'),
        ];
    }
}
