<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExternalSettingResource\Pages;
use App\Filament\Resources\ExternalSettingResource\RelationManagers;
use App\Models\ExternalSetting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ExternalSettingResource extends Resource
{
    protected static ?string $model = ExternalSetting::class;

    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('invitation_url')
                    ->required(),
                Forms\Components\TextInput::make('contact1_name')
                    ->required(),
                Forms\Components\TextInput::make('contact2_name')
                    ->required(),
                Forms\Components\TextInput::make('contact1_link')
                    ->required(),
                Forms\Components\TextInput::make('contact2_link')
                    ->required(),
                Forms\Components\TextInput::make('internal_terms_url')
                    ->required(),
                Forms\Components\TextInput::make('external_terms_url')
                    ->required(),
                Forms\Components\TextInput::make('terms_form_url')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('invitation_url'),
                Tables\Columns\TextColumn::make('contact1_name'),
                Tables\Columns\TextColumn::make('contact2_name'),
                Tables\Columns\TextColumn::make('contact1_link'),
                Tables\Columns\TextColumn::make('contact2_link'),
                Tables\Columns\TextColumn::make('internal_terms_url'),
                Tables\Columns\TextColumn::make('external_terms_url'),
                Tables\Columns\TextColumn::make('terms_form_url'),
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
            'index' => Pages\ListExternalSettings::route('/'),
            // 'create' => Pages\CreateExternalSetting::route('/create'),
            'edit' => Pages\EditExternalSetting::route('/{record}/edit'),
        ];
    }
}
