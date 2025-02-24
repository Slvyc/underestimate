<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KerjasamaResource\Pages;
use App\Filament\Resources\KerjasamaResource\RelationManagers;
use App\Models\Kerjasama;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use PhpParser\Node\Stmt\Label;

class KerjasamaResource extends Resource
{
    protected static ?string $model = Kerjasama::class;
    protected static ?string $navigationLabel = 'Kerjasama FT Unaya'; // Mengubah nama sidebar
    protected static ?string $pluralLabel = 'Kerjasama FT Unaya'; // Mengubah nama header
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_kerjasama')
                    ->label('Nama Kerjasama')
                    ->required(),
                TextInput::make('lingkup_kerjasama')
                    ->label('Lingkup Kerjasama')
                    ->required(),
                TextInput::make('jenis_dokumen')
                    ->label('Jenis Dokumen')
                    ->required(),
                Select::make('status_kerjasama')
                    ->label('Status Kerjasama')
                    ->options([
                        'Aktif' => 'Aktif',
                        'Selesai' => 'Selesai',
                    ])
                    ->required(),
                TextInput::make('link')
                    ->label('Link')
                    ->required(),
                DatePicker::make('tanggal')
                    ->label('Tanggal')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_kerjasama')
                    ->label('Nama Kerjasama')
                    ->limit(50)
                    ->wrap()
                    ->searchable(),

                TextColumn::make('lingkup_kerjasama')
                    ->label('Lingkup Kerjasama')
                    ->wrap()
                    ->searchable(),

                TextColumn::make('jenis_dokumen')
                    ->label('Jenis Dokumen')
                    ->wrap()
                    ->searchable(),

                TextColumn::make('status_kerjasama')
                    ->label('Status Kerjasama')
                    ->wrap()
                    ->searchable(),

                TextColumn::make('link')
                    ->label('Link')
                    ->limit(50)
                    ->wrap()
                    ->searchable(),

                TextColumn::make('tanggal')
                    ->label('Tanggal')
                    ->wrap()
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
            'index' => Pages\ManageKerjasamas::route('/'),
        ];
    }
}
