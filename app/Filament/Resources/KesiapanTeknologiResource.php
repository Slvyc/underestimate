<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KesiapanTeknologiResource\Pages;
use App\Filament\Resources\KesiapanTeknologiResource\RelationManagers;
use App\Models\KesiapanTeknologi;
use Date;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope; 


class KesiapanTeknologiResource extends Resource
{
    protected static ?string $model = KesiapanTeknologi::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Tingkat Kesiapan Teknologi'; // Mengubah nama sidebar
    protected static ?string $pluralLabel = 'TIngkat Kesiapan Teknologi'; // Mengubah nama header
    protected static ?string $navigationGroup = 'Manajemen Download'; // Membuat grup di sidebar

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('produk_inovasi')
                    ->label('Produk Inovasi Teknologi')
                    ->required(),
                TextInput::make('deskripsi')
                    ->label('Deskripsi')
                    ->required(),
                TextInput::make('nilai_tkt')
                    ->label('Nilai TKT')
                    ->required(),
                TextInput::make('link')
                    ->label('Link'),
                DatePicker::make('tanggal')
                    ->label('Tanggal')
                    ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('produk_inovasi')
                    ->label('Produk Inovasi Teknologi')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('deskripsi')
                    ->label('Deskripsi')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('nilai_tkt')
                    ->label('Nilai TKT')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('link')
                    ->label('Link')
                    ->sortable(),
                TextColumn::make('tanggal')
                    ->label('Tanggal')
                    ->date()
                    ->sortable()
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
            'index' => Pages\ManageKesiapanTeknologis::route('/'),
        ];
    }
}
