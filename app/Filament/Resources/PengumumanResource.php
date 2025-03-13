<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PengumumanResource\Pages;
use App\Filament\Resources\PengumumanResource\RelationManagers;
use App\Models\Pengumuman;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PengumumanResource extends Resource
{
    protected static ?string $model = Pengumuman::class;
    protected static ?string $navigationGroup = 'Manajemen Berita';
    protected static ?string $navigationLabel = 'Pengumuman FT Unaya'; // Mengubah nama sidebar
    protected static ?string $label = 'Pengumuman '; // Mengubah nama header
    protected static ?string $slug = 'Pengumuman'; // Mengubah nama slug di url
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('tanggal_pengumuman')
                    ->label('Tanggal Pengumuman')
                    ->numeric()
                    ->required(),

                Select::make('bulan_pengumuman')
                    ->label('Bulan Pengumuman')
                    ->options([
                        'JAN' => 'Januari',
                        'FEB' => 'Februari',
                        'MAR' => 'Maret',
                        'APR' => 'April',
                        'MEI' => 'Mei',
                        'JUN' => 'Juni',
                        'JUL' => 'Juli',
                        'AGU' => 'Agustus',
                        'SEP' => 'September',
                        'OKT' => 'Oktober',
                        'NOV' => 'November',
                        'DES' => 'Desember',
                    ])
                    ->required(),

                TextInput::make('judul_pengumuman')
                    ->label('Judul Pengumuman')
                    ->required(),

                Textarea::make('deskripsi_pengumuman')
                    ->label('Deksripsi Pengumuman')
                    ->required()
                    ->rows(10)
                    ->cols(20)
                    ->columnSpanFull(),

                TextInput::make('link')
                    ->label('Link Pengumuman')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('tanggal_pengumuman')
                    ->label('Tanggal Pengumuman')
                    ->searchable(),
                TextColumn::make('bulan_pengumuman')
                    ->label('Bulan Pengumuman')
                    ->searchable(),
                TextColumn::make('judul_pengumuman')
                    ->label('Judul Pengumuman')
                    ->limit(50)
                    ->wrap()
                    ->searchable(),
                TextColumn::make('deskripsi_pengumuman')
                    ->label('Deskripsi Pengumuman')
                    ->limit(50)
                    ->wrap()
                    ->searchable(),
                TextColumn::make('link')
                    ->label('Link Pengumuman')
                    ->searchable(),
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
            'index' => Pages\ManagePengumumen::route('/'),
        ];
    }
}
