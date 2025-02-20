<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KurikulumSiResource\Pages;
use App\Filament\Resources\KurikulumSiResource\RelationManagers;
use App\Models\KurikulumSi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KurikulumSiResource extends Resource
{
    protected static ?string $model = KurikulumSi::class;
    protected static ?string $navigationGroup = 'Kurikulum';
    protected static ?string $navigationLabel = 'Kurikulum Sistem Informasi';
    protected static ?string $pluralLabel = 'Kurikulum Sistem Informasi';
    protected static ?string $slug = 'kurikulum-si';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('semester')
                    ->label('Semester')
                    ->numeric()
                    ->required(),
                TextInput::make('kode_mk')
                    ->label('Kode Mata Kuliah')
                    ->required(),
                TextInput::make('mata_kuliah')
                    ->label('Mata Kuliah')
                    ->required(),
                TextInput::make('sks')
                    ->label('SKS')
                    ->numeric()
                    ->required(),
                TextInput::make('praktek')
                    ->label('Praktek')
                    ->numeric()
                    ->required(),
                TextInput::make('teori')
                    ->label('Teori')
                    ->numeric()
                    ->required(),
                Select::make('kategori')
                    ->label('Kategori Mata Kuliah')
                    ->required()
                    ->options([
                        'wajib' => 'Wajib',
                        'pilihan' => 'Pilihan',
                    ]),
                TextInput::make('rps')
                    ->label('RPS'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('semester')
                    ->label('Semester')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('kode_mk')
                    ->label('Kode Mata Kuliah')
                    ->searchable(),
                TextColumn::make('mata_kuliah')
                    ->label('Mata Kuliah')
                    ->searchable(),
                TextColumn::make('sks')
                    ->label('SKS')
                    ->searchable(),
                TextColumn::make('praktek')
                    ->label('Praktek')
                    ->searchable(),
                TextColumn::make('teori')
                    ->label('Teori')
                    ->searchable(),
                TextColumn::make('kategori')
                    ->label('Kategori Mata Kuliah')
                    ->searchable(),
                TextColumn::make('rps')
                    ->label('RPS'),
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
            'index' => Pages\ManageKurikulumSis::route('/'),
        ];
    }
}
