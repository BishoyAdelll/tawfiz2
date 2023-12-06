<?php

namespace App\Filament\Resources;

use App\Filament\Resources\QuestionResource\Pages;
use App\Filament\Resources\QuestionResource\RelationManagers;
use App\Models\Governorate;
use App\Models\Question;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class QuestionResource extends Resource
{
    protected static ?string $model = Question::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('job')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('governorate')
                    ->required()
                    ->options(Governorate::query()->pluck('name','id'))->native(false),
                Forms\Components\TextInput::make('Years_of_experience')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('residence')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('gender')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('graduation')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DateTimePicker::make('date_of_visit')
                    ->required(),
                Forms\Components\TextInput::make('mode_by')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('center_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('address')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('code')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('phone')
                    ->tel()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('published_at')
                    ->required(),
                Forms\Components\TextInput::make('carrying_capacity')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('number_of_floors')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Toggle::make('center_statement')
                    ->required(),
                Forms\Components\TextInput::make('rate')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Toggle::make('includes_women')
                    ->required(),
                Forms\Components\Toggle::make('training_courses_support')
                    ->required(),
                Forms\Components\Toggle::make('training_courses')
                    ->required(),
                Forms\Components\TextInput::make('course_rate')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Toggle::make('committees')
                    ->required(),
                Forms\Components\TextInput::make('committee_report')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Toggle::make('committee_active')
                    ->required(),
                Forms\Components\TextInput::make('center_duration')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Toggle::make('center_needs')
                    ->required(),
                Forms\Components\Toggle::make('center_study')
                    ->required(),
                Forms\Components\TextInput::make('rate_study')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Toggle::make('team_plane')
                    ->required(),
                Forms\Components\Toggle::make('center_active')
                    ->required(),
                Forms\Components\TextInput::make('activity_report')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Toggle::make('difference_cooperate')
                    ->required(),
                Forms\Components\Toggle::make('root_help')
                    ->required(),
                Forms\Components\Toggle::make('root_is_fare')
                    ->required(),
                Forms\Components\TextInput::make('root_rate')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Toggle::make('many_help')
                    ->required(),
                Forms\Components\TextInput::make('help_rate')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Toggle::make('works_to_maximize')
                    ->required(),
                Forms\Components\Toggle::make('center_tools')
                    ->required(),
                Forms\Components\TextInput::make('rate_center_tools')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Toggle::make('center_team')
                    ->required(),
                Forms\Components\Toggle::make('center_benefit')
                    ->required(),
                Forms\Components\Toggle::make('center_coordinate')
                    ->required(),
                Forms\Components\TextInput::make('coordinate_rate')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Toggle::make('good_equipment')
                    ->required(),
                Forms\Components\Toggle::make('good_team_data')
                    ->required(),
                Forms\Components\Toggle::make('training_course')
                    ->required(),
                Forms\Components\Toggle::make('adopting_controlled')
                    ->required(),
                Forms\Components\TextInput::make('adopting_rate')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Toggle::make('assistance_provided')
                    ->required(),
                Forms\Components\Toggle::make('center_tech')
                    ->required(),
                Forms\Components\Toggle::make('follow_up')
                    ->required(),
                Forms\Components\Toggle::make('evaluation_system')
                    ->required(),
                Forms\Components\Toggle::make('center_vision')
                    ->required(),
                Forms\Components\TextInput::make('difficult_challenges')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Toggle::make('previous_expertise')
                    ->required(),
                Forms\Components\Toggle::make('center_partners')
                    ->required(),
                Forms\Components\TextInput::make('rate_support')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Toggle::make('center_ability')
                    ->required(),
                Forms\Components\TextInput::make('center_technology')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('center_speed')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('universe')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('job')
                    ->searchable(),
                Tables\Columns\TextColumn::make('governorate')
                    ->searchable(),
                Tables\Columns\TextColumn::make('residence')
                    ->searchable(),
                Tables\Columns\TextColumn::make('gender')
                    ->searchable(),
                Tables\Columns\TextColumn::make('graduation')
                    ->searchable(),
                Tables\Columns\TextColumn::make('date_of_visit')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('mode_by')
                    ->searchable(),
                Tables\Columns\TextColumn::make('center_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('code')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('published_at')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('carrying_capacity')
                    ->searchable(),
                Tables\Columns\TextColumn::make('number_of_floors')
                    ->searchable(),
                Tables\Columns\IconColumn::make('center_statement')
                    ->boolean(),
                Tables\Columns\TextColumn::make('rate')
                    ->searchable(),
                Tables\Columns\IconColumn::make('includes_women')
                    ->boolean(),
                Tables\Columns\IconColumn::make('training_courses_support')
                    ->boolean(),
                Tables\Columns\IconColumn::make('training_courses')
                    ->boolean(),
                Tables\Columns\TextColumn::make('course_rate')
                    ->searchable(),
                Tables\Columns\IconColumn::make('committees')
                    ->boolean(),
                Tables\Columns\TextColumn::make('committee_report')
                    ->searchable(),
                Tables\Columns\IconColumn::make('committee_active')
                    ->boolean(),
                Tables\Columns\TextColumn::make('center_duration')
                    ->searchable(),
                Tables\Columns\IconColumn::make('center_needs')
                    ->boolean(),
                Tables\Columns\IconColumn::make('center_study')
                    ->boolean(),
                Tables\Columns\TextColumn::make('rate_study')
                    ->searchable(),
                Tables\Columns\IconColumn::make('team_plane')
                    ->boolean(),
                Tables\Columns\IconColumn::make('center_active')
                    ->boolean(),
                Tables\Columns\TextColumn::make('activity_report')
                    ->searchable(),
                Tables\Columns\IconColumn::make('difference_cooperate')
                    ->boolean(),
                Tables\Columns\IconColumn::make('root_help')
                    ->boolean(),
                Tables\Columns\IconColumn::make('root_is_fare')
                    ->boolean(),
                Tables\Columns\TextColumn::make('root_rate')
                    ->searchable(),
                Tables\Columns\IconColumn::make('many_help')
                    ->boolean(),
                Tables\Columns\TextColumn::make('help_rate')
                    ->searchable(),
                Tables\Columns\IconColumn::make('works_to_maximize')
                    ->boolean(),
                Tables\Columns\IconColumn::make('center_tools')
                    ->boolean(),
                Tables\Columns\TextColumn::make('rate_center_tools')
                    ->searchable(),
                Tables\Columns\IconColumn::make('center_team')
                    ->boolean(),
                Tables\Columns\IconColumn::make('center_benefit')
                    ->boolean(),
                Tables\Columns\IconColumn::make('center_coordinate')
                    ->boolean(),
                Tables\Columns\TextColumn::make('coordinate_rate')
                    ->searchable(),
                Tables\Columns\IconColumn::make('good_equipment')
                    ->boolean(),
                Tables\Columns\IconColumn::make('good_team_data')
                    ->boolean(),
                Tables\Columns\IconColumn::make('training_course')
                    ->boolean(),
                Tables\Columns\IconColumn::make('adopting_controlled')
                    ->boolean(),
                Tables\Columns\TextColumn::make('adopting_rate')
                    ->searchable(),
                Tables\Columns\IconColumn::make('assistance_provided')
                    ->boolean(),
                Tables\Columns\IconColumn::make('center_tech')
                    ->boolean(),
                Tables\Columns\IconColumn::make('follow_up')
                    ->boolean(),
                Tables\Columns\IconColumn::make('evaluation_system')
                    ->boolean(),
                Tables\Columns\IconColumn::make('center_vision')
                    ->boolean(),
                Tables\Columns\TextColumn::make('difficult_challenges')
                    ->searchable(),
                Tables\Columns\IconColumn::make('previous_expertise')
                    ->boolean(),
                Tables\Columns\IconColumn::make('center_partners')
                    ->boolean(),
                Tables\Columns\TextColumn::make('rate_support')
                    ->searchable(),
                Tables\Columns\IconColumn::make('center_ability')
                    ->boolean(),
                Tables\Columns\TextColumn::make('center_technology')
                    ->searchable(),
                Tables\Columns\TextColumn::make('center_speed')
                    ->searchable(),
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
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListQuestions::route('/'),
            'create' => Pages\CreateQuestion::route('/create'),
            'view' => Pages\ViewQuestion::route('/{record}'),
            'edit' => Pages\EditQuestion::route('/{record}/edit'),
        ];
    }
}
