<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DokumenMonevResource\Pages;
use App\Filament\Resources\DokumenMonevResource\RelationManagers;
use App\Models\DokumenMonev;
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

class DokumenMonevResource extends Resource
{
    protected static ?string $model = DokumenMonev::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Dokumen Monev'; // Mengubah nama sidebar
    protected static ?string $label = 'Dokumen Monev'; // Mengubah nama header
    protected static ?string $slug = 'Dokumen-Monev'; // Mengubah nama slug di url
    protected static ?string $navigationGroup = 'Manajemen Download'; // Membuat grup di sidebar

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_dokumen')
                    ->label('Nama Dokumen')
                    ->required(),
                TextInput::make('link')
                    ->label('Link'),
                DatePicker::make('date')
                    ->label('Tanggal')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_dokumen')
                    ->label('Nama Dokumen')
                    ->searchable(),
                TextColumn::make('link')
                    ->label('Link')
                    ->searchable(),
                TextColumn::make('date')
                    ->label('Tanggal')
                    ->searchable()
                    ->sortable(),
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
            'index' => Pages\ManageDokumenMonevs::route('/'),
        ];
    }
}
