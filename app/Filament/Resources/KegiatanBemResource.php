<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KegiatanBemResource\Pages;
use App\Filament\Resources\KegiatanBemResource\RelationManagers;
use App\Models\KegiatanBem;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;


class KegiatanBemResource extends Resource
{
    protected static ?string $model = KegiatanBem::class;
    protected static ?string $navigationGroup = 'Organisasi';
    protected static ?string $navigationLabel = 'Kegiatan BEM'; 
    protected static ?string $slug = 'Kegiatan-Bem';
    protected static ?string $pluralLabel = 'Kegiatan BEM';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->label('Judul')
                    ->required()
                    ->columnSpanFull(),

                Textarea::make('description')
                    ->label('Deksripsi Berita')
                    ->required()
                    ->rows(10)
                    ->cols(20)
                    ->columnSpanFull(),

                FileUpload::make('image_news')
                    ->label('Gambar Berita')
                    ->required()
                    ->directory('uploads/kegiatan_bem')
                    ->columnSpan('full')
                    ->imagePreviewHeight('250')
                    ->imageEditor(),

                DatePicker::make('date')
                    ->label('Tanggal Publikasi')
                    ->required()
                    ->columnSpan('full'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image_news')
                    ->label('Gambar Berita')
                    ->square()
                    ->width(200)
                    ->height(200)
                    ->disk('public')
                    ->url(fn ($record) => asset('storage/' . $record->image_news)),

                TextColumn::make('title')
                    ->label('Judul')
                    ->searchable()
                    ->limit(50)
                    ->wrap(),

                TextColumn::make('description')
                    ->label('Deskripsi')
                    ->limit(100)
                    ->wrap(),

                TextColumn::make('date')
                    ->label('Tanggal Publikasi')
                    ->dateTime('d M Y')
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
            'index' => Pages\ManageKegiatanBems::route('/'),
        ];
    }
}
