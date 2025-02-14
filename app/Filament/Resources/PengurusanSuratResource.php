<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PengurusanSuratResource\Pages;
use App\Filament\Resources\PengurusanSuratResource\RelationManagers;
use App\Models\PengurusanSurat;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PengurusanSuratResource extends Resource
{
    protected static ?string $model = PengurusanSurat::class;
    protected static ?string $navigationGroup = 'Manajemen Surat';
    protected static ?string $navigationLabel = 'Pengurusan Surat'; // Mengubah nama sidebar
    protected static ?string $label = 'Pengurusan Surat '; // Mengubah nama header
    protected static ?string $slug = 'Pengurusan-Surat'; // Mengubah nama slug di url
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('pengurusan_surat')
                    ->label('Pengurusan Surat')
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
                TextColumn::make('pengurusan_surat')
                    ->label('Pengurusan Surat')
                    ->searchable(),
                TextColumn::make('link')
                    ->label('Link')
                    ->searchable(),
                TextColumn::make('date')
                    ->label('Tanggal')
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
            'index' => Pages\ManagePengurusanSurats::route('/'),
        ];
    }
}
