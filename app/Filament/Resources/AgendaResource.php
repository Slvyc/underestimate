<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AgendaResource\Pages;
use App\Filament\Resources\AgendaResource\RelationManagers;
use App\Models\Agenda;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Form;
use App\Forms\Components\YearPicker;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;

class AgendaResource extends Resource
{
    protected static ?string $model = Agenda::class;
    protected static ?string $navigationLabel = 'Agenda'; // Mengubah nama sidebar
    protected static ?string $navigationGroup = 'Manajemen Berita'; // Membuat grup di sidebar
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('tahun_agenda')
                    ->label('Tahun')
                    ->required(),
                Textarea::make('judul_agenda')
                    ->label('Judul')
                    ->required(),
                TextInput::make('masa_agenda')
                    ->label('Masa')
                    ->required(),
                DatePicker::make('date')
                    ->label('Tanggal Agenda')
                    ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('tahun_agenda')
                    ->label('Tahun')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('judul_agenda')
                    ->limit(50)
                    ->wrap()
                    ->label('Judul')
                    ->searchable(),
                TextColumn::make('masa_agenda')
                    ->wrap()
                    ->limit(50)
                    ->label('Masa')
                    ->searchable(),
                TextColumn::make('date')
                    ->label('Tanggal Agenda')
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
            'index' => Pages\ManageAgendas::route('/'),
        ];
    }
}
