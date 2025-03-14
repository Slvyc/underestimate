<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DosenSipilResource\Pages;
use App\Filament\Resources\DosenSipilResource\RelationManagers;
use App\Models\DosenSipil;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DosenSipilResource extends Resource
{
    protected static ?string $model = DosenSipil::class;
    protected static ?string $navigationGroup = 'Dosen';
    protected static ?string $navigationLabel = 'Dosen Teknik Sipil'; // Mengubah nama sidebar
    protected static ?string $label = 'Dosen Teknik Sipil '; // Mengubah nama header
    protected static ?string $slug = 'Dosen-Sipil'; // Mengubah nama slug di url
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('gambar_dosen')
                    ->label('Foto Dosen')
                    ->visibility('public')
                    ->disk('public') // Pastikan disk yang digunakan adalah 'public'
                    ->directory('uploads/gambar_dosen_sipil'),
                TextInput::make('nama_dosen')
                    ->label('Nama Dosen')
                    ->required(),
                Select::make('posisi_dosen')
                    ->label('Posisi Dosen')
                    ->options([
                        'Asisten Ahli' => 'Asisten Ahli',
                        'Lektor' => 'Lektor',
                        'Lektor Kepala' => 'Lektor Kepala',
                        'Profesor' => 'Profesor',
                    ]),
                TextInput::make('nidn')
                    ->label('NIDN'),
                Forms\Components\Section::make('Riwayat Pendidikan')
                    ->schema([
                        TextInput::make('riwayat_prodi')
                            ->label('Program Studi'),
                        TextInput::make('riwayat_universitas')
                            ->label('Universitas')
                    ])
                    ->collapsible(),
                TextInput::make('link_publikasi')
                    ->label('Link Publikasi')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_dosen')
                    ->label('Nama Dosen'),
                ImageColumn::make('gambar_dosen')
                    ->label('Foto Dosen')
                    ->circular(),
                TextColumn::make('posisi_dosen')
                    ->label('Posisi'),
                TextColumn::make('nidn')
                    ->label('NIDN'),
                TextColumn::make('riwayat_prodi')
                    ->label('Riwayat Program Studi'),
                TextColumn::make('riwayat_universitas')
                    ->label('Riwayat Universitas'),
                TextColumn::make('link_publikasi')
                    ->label('Link Publikasi')
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
            'index' => Pages\ManageDosenSipils::route('/'),
        ];
    }
}
