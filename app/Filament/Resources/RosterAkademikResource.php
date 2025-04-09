<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RosterAkademikResource\Pages;
use App\Filament\Resources\RosterAkademikResource\RelationManagers;
use App\Models\RosterAkademik;
use Dom\Text;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Forms\Components\FileUpload; //file upload plug
use Filament\Tables\Columns\ImageColumn; //file show plug
use Filament\Tables\Columns\TextColumn;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RosterAkademikResource extends Resource
{
    protected static ?string $model = RosterAkademik::class;
    protected static ?string $navigationGroup = 'Akademik';
    protected static ?string $navigationLabel = 'Roster Akademik'; // Mengubah nama sidebar
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('roster_sipil')
                    ->label('Roster Sipil')
                    ->visibility('public')
                    ->disk('public') // Pastikan disk yang digunakan adalah 'public'
                    ->acceptedFileTypes(['application/pdf'])
                    ->preserveFilenames()
                    ->directory('uploads/Roster'),
                FileUpload::make('roster_mesin')
                    ->label('Roster Mesin')
                    ->visibility('public')
                    ->disk('public') // Pastikan disk yang digunakan adalah 'public'
                    ->acceptedFileTypes(['application/pdf'])
                    ->preserveFilenames()
                    ->directory('uploads/Roster'),
                FileUpload::make('roster_sistem_informasi')
                    ->label('Roster Sistem Informasi')
                    ->visibility('public')
                    ->disk('public') // Pastikan disk yang digunakan adalah 'public'
                    ->acceptedFileTypes(['application/pdf'])
                    ->preserveFilenames()
                    ->directory('uploads/Roster'),
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('roster_sipil')
                    ->label('Roster Sipil'),
                TextColumn::make('roster_mesin')
                    ->label('Roster Mesin'),
                TextColumn::make('roster_sistem_informasi')
                    ->label('Roster Sistem Informasi'),

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
            'index' => Pages\ManageRosterAkademiks::route('/'),
        ];
    }
}
