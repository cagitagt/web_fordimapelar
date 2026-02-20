<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DepartmentProgramResource\Pages;
use App\Filament\Resources\DepartmentProgramResource\RelationManagers;
use App\Models\DepartmentProgram;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Set;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DepartmentProgramResource extends Resource
{
    protected static ?string $model = DepartmentProgram::class;

    public static function getEloquentQuery(): Builder
{
    return parent::getEloquentQuery()->with('department');
}


    protected static ?string $navigationIcon = 'heroicon-o-building-office-2';

    protected static ?string $navigationGroup = 'Department Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('department_id')
                    ->relationship('department','name_dept')
                    ->searchable()
                    ->required(),
                Forms\Components\TextInput::make('name_program')
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state)))
                    ->required(),
                Forms\Components\Textarea::make('description')
                    ->required(),
                Forms\Components\TextInput::make('time_label')
                    ->required(),
                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('department.name_dept'),
                Tables\Columns\TextColumn::make('name_program'),
                Tables\Columns\TextColumn::make('time_label'),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('department_id')
                    ->relationship('department', 'name_dept')
                    ->searchable()
                    ->label('Select Category'),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListDepartmentPrograms::route('/'),
            'create' => Pages\CreateDepartmentProgram::route('/create'),
            'edit' => Pages\EditDepartmentProgram::route('/{record}/edit'),
        ];
    }
}
