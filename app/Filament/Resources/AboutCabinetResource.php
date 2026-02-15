<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutCabinetResource\Pages;
use App\Filament\Resources\AboutCabinetResource\RelationManagers;
use App\Models\AboutCabinet;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AboutCabinetResource extends Resource
{
    protected static ?string $model = AboutCabinet::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('cabinet_name')
                    ->required(),
                Forms\Components\TextInput::make('cabinet_year')
                    ->required(),
                Forms\Components\TextInput::make('cabinet_ebook'),
                Forms\Components\TextInput::make('company_profile_link'),
                Forms\Components\FileUpload::make('cabinet_visual')
                    ->image()
                    ->columnSpanFull(),
                Forms\Components\RichEditor::make('cabinet_narrative')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('chairman_name')
                    ->required(),
                Forms\Components\FileUpload::make('chairman_photo')
                    ->image()
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\RichEditor::make('chairman_narrative')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('cabinet_vision')
                    ->required(),
                Forms\Components\RichEditor::make('cabinet_mission')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('cabinet_structure_img')
                    ->image()
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('cabinet_name'),
                Tables\Columns\TextColumn::make('cabinet_year'),
                Tables\Columns\TextColumn::make('cabinet_ebook'),
                Tables\Columns\TextColumn::make('chairman_name'),
                Tables\Columns\TextColumn::make('chairman_photo'),
                Tables\Columns\TextColumn::make('cabinet_vision'),
                Tables\Columns\TextColumn::make('cabinet_mission'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListAboutCabinets::route('/'),
            // 'create' => Pages\CreateAboutCabinet::route('/create'),
            'edit' => Pages\EditAboutCabinet::route('/{record}/edit'),
        ];
    }
}
