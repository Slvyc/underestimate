<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SopPanduanResource\Pages;
use App\Filament\Resources\SopPanduanResource\RelationManagers;
use App\Models\sopPanduan;
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

class SopPanduanResource extends Resource
{
    protected static ?string $model = SopPanduan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    
    protected static ?string $navigationLabel = 'Sop dan Panduan'; // Mengubah nama sidebar
    protected static ?string $navigationGroup = 'Manajemen Download'; // Membuat grup di sidebar

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_file')
                    ->label('Nama File')
                    ->required(),
                TextInput::make('link')
                    ->label('Link')
                    ->required(),
                DatePicker::make('date')
                    ->label('Tanggal')
                    ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_file')
                    ->label('Nama File')
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
            'index' => Pages\ManageSopPanduans::route('/'),
        ];
    }
}
