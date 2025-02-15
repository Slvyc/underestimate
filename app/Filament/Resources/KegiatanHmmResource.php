<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KegiatanHmmResource\Pages;
use App\Filament\Resources\KegiatanHmmResource\RelationManagers;
use App\Models\KegiatanHmm;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KegiatanHmmResource extends Resource
{
    protected static ?string $model = KegiatanHmm::class;
    protected static ?string $navigationGroup = 'Organisasi';
    protected static ?string $navigationLabel = 'Kegiatan HMM'; 
    protected static ?string $slug = 'Kegiatan-hmm';
    protected static ?string $pluralLabel = 'Kegiatan HMM';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->label('Judul')
                    ->required(),
                Textarea::make('description')
                    ->label('Deksripsi Berita')
                    ->required(),
                FileUpload::make('image_news')
                    ->required()
                    ->directory('uploads/kegiatan_hmm'),
                DatePicker::make('date')
                    ->label('Tanggal Publikasi')
                    ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image_news')
                    ->label('Gambar Kegiatan')
                    ->square()
                    ->width(200)
                    ->height(200)
                    ->disk('public') // Pastikan disk yang digunakan adalah 'public'
                    ->url(fn ($record) => asset('storage/' . $record->image_news)),
                TextColumn::make('title')
                    ->searchable(),
                TextColumn::make('description')
                    ->searchable(),
                TextColumn::make('date')
                    ->label('Tanggal Publikasi')
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
            'index' => Pages\ManageKegiatanHmms::route('/'),
        ];
    }
}
