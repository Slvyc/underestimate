<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BeritaResource\Pages;
use App\Filament\Resources\BeritaResource\RelationManagers;
use App\Models\Berita;
use Filament\Forms;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;

class BeritaResource extends Resource
{
    protected static ?string $model = Berita::class;
    protected static ?string $navigationLabel = 'Berita FT Unaya'; // Mengubah nama sidebar
    protected static ?string $navigationGroup = 'Manajemen Berita'; // Membuat grup di sidebar
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
                    ->directory('uploads/berita')
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
            'index' => Pages\ManageBeritas::route('/'),
        ];
    }
}
