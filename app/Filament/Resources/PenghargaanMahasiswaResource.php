<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PenghargaanMahasiswaResource\Pages;
use App\Filament\Resources\PenghargaanMahasiswaResource\RelationManagers;
use App\Models\PenghargaanMahasiswa;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PenghargaanMahasiswaResource extends Resource
{
    protected static ?string $model = PenghargaanMahasiswa::class;
    protected static ?string $navigationGroup = 'Penghargaan';
    protected static ?string $navigationLabel = 'Penghargaan Mahasiswa'; 
    protected static ?string $label = 'Penghargaan Mahasiswa'; // Mengubah nama header
    protected static ?string $slug = 'penghargaan-mahasiswa';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('gambar_person')
                    ->label('Foto Mahasiswa')
                    ->visibility('public')
                    ->disk('public') // Pastikan disk yang digunakan adalah 'public'
                    ->directory('uploads/gambar_person')
                    ->required(),
                TextInput::make('person')
                    ->label('Nama Mahasiswa')
                    ->required(),
                TextArea::make('prestasi')
                    ->label('Prestasi')
                    ->required(),
                Select::make('tingkat')
                    ->label('Tingkat')
                    ->options([
                        'Internasional' => 'Internasional',
                        'Nasional' => 'Nasional',
                        'Wilayah' => 'Wilayah',
                        'Lokal' => 'Lokal',
                        'Provinsi' => 'Provinsi',
                        'Kabupaten/Kota' => 'Kabupaten/Kota',
                    ])
                    ->required(),
                TextInput::make('tahun')
                    ->label('Tahun')
                    ->minValue(2000)
                    ->maxValue(2030)
                    ->numeric()
                    ->required(),
                TextInput::make('link')
                    ->label('Link')
                    ->required(),
                DatePicker::make('date')
                    ->label('Tanggal')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('person')
                    ->label('Nama Dosen')
                    ->searchable(),
                ImageColumn::make('gambar_person')
                    ->circular()
                    ->label('Foto Dosen'),
                TextColumn::make('person')
                    ->label('Nama Dosen')
                    ->searchable(),
                TextColumn::make('prestasi')
                    ->limit(50)
                    ->label('Prestasi')
                    ->searchable(),
                TextColumn::make('tingkat')
                    ->label('Tingkat')
                    ->searchable(),
                TextColumn::make('tahun')
                    ->label('Tahun')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('link')
                    ->label('Link'),
                TextColumn::make('date')
                    ->label('Tanggal')
                    ->searchable()
                    ->sortable()
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
            'index' => Pages\ManagePenghargaanMahasiswas::route('/'),
        ];
    }
}
