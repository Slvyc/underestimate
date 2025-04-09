<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KalenderAkademikResource\Pages;
use App\Filament\Resources\KalenderAkademikResource\RelationManagers;
use App\Models\KalenderAkademik;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\FileUpload; //file upload plug
use Filament\Tables\Columns\ImageColumn; //file show plug
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KalenderAkademikResource extends Resource
{
    protected static ?string $model = KalenderAkademik::class;
    protected static ?string $navigationGroup = 'Akademik';
    protected static ?string $navigationLabel = 'Kalender Akademik'; // Mengubah nama sidebar
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('image_ganjil')
                    ->label('Kalender Ganjil')
                    ->visibility('public')
                    ->preserveFilenames()
                    ->disk('public') // Pastikan disk yang digunakan adalah 'public'
                    ->directory('uploads/kalender_akademik'),
                FileUpload::make('image_genap')
                    ->label('Kalender Genap')
                    ->visibility('public')
                    ->preserveFilenames()
                    ->disk('public') // Pastikan disk yang digunakan adalah 'public'
                    ->directory('uploads/kalender_akademik'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image_ganjil')
                    ->disk('public') // Pastikan disk yang digunakan adalah 'public'
                    ->visibility('public')
                    ->width(200)
                    ->height(200)
                    ->label('Kalender Ganjil'),
                ImageColumn::make('image_genap')
                    ->disk('public') // Pastikan disk yang digunakan adalah 'public'
                    ->visibility('public')
                    ->width(200)
                    ->height(200)
                    ->label('Kalender Genap'),
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
            'index' => Pages\ManageKalenderAkademiks::route('/'),
        ];
    }
}
