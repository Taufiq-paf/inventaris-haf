<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InventarisResource\Pages;
use App\Filament\Resources\InventarisResource\RelationManagers;
use App\Models\Inventaris;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InventarisResource extends Resource
{
    protected static ?string $model = Inventaris::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_inventaris')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('id_jenis')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('nilai')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('tahun')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('sumber')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('lokasi')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('foto')
                    ->required()
                    ->image()
                    ->imageEditor(),
                Forms\Components\TextInput::make('bidang')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nama_pj')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('kota')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('user')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_inventaris')
                    ->searchable(),
                Tables\Columns\TextColumn::make('id_jenis')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nilai')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sumber')
                    ->searchable(),
                Tables\Columns\TextColumn::make('lokasi')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('foto')
                    ->square(),
                Tables\Columns\TextColumn::make('bidang')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama_pj')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kota')
                    ->searchable(),
                Tables\Columns\TextColumn::make('user')
                    ->searchable(),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListInventaris::route('/'),
            'create' => Pages\CreateInventaris::route('/create'),
            'edit' => Pages\EditInventaris::route('/{record}/edit'),
        ];
    }
}
