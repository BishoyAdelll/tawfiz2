<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected  $table='questions';
    protected $fillable=[
        'name',
        'job',
        'governorate',
        'residence',
        'Years_of_experience',
        'gender',
        'graduation',
        'date_of_visit',
        'mode_by',
        'center_name',
        'address',
        'code',
        'phone',
        'email',
        'published_at',
        'carrying_capacity',
        'number_of_floors',
        'center_statement',
        'rate',
        'includes_women',
        'training_courses_support',
        'training_courses',
        'course_rate',
        'committees',
        'committee_report',
        'committee_active',
        'center_duration',
        'center_needs',
        'center_study',
        'rate_study',
        'team_plane',
        'center_active',
        'activity_report',
        'difference_cooperate',
        'root_help',
        'root_is_fare',
        'root_rate',
        'many_help',
        'help_rate',
        'works_to_maximize',
        'center_tools',
        'alternative_plans',
        'rate_center_tools',
        'center_team',
        'center_benefit',
        'center_coordinate',
        'coordinate_rate',
        'good_equipment',
        'good_team_data',
        'training_course',
        'adopting_controlled',
        'adopting_rate',
        'assistance_provided',
        'center_tech',
        'follow_up',
        'evaluation_system',
        'center_vision',
        'difficult_challenges',
        'previous_expertise',
        'center_partners',
        'rate_support',
        'center_ability',
        'center_technology',
        'center_speed',
        'universe',
        'governorate_id'
    ];
    public  function governorate()
    {
        return $this->belongsTo(Governorate::class);
    }
}
