<?php

namespace App\Livewire;

use App\Models\Governorate;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Question extends Component
{
#[Validate('required|string')]
public $name;
#[Validate('required|string')]
public $job;
#[Validate('required|string')]
public $governorate;
#[Validate('required|string')]
public $residence;
#[Validate('required|string')]
public $Years_of_experience;
#[Validate('required|string')]
public $gender;
#[Validate('required|string')]
public $graduation;
#[Validate('required|string')]
public $date_of_visit;
#[Validate('required|string')]
public $mode_by;
#[Validate('required|string')]
public $center_name;
#[Validate('required|string')]
public $address;
#[Validate('required|string')]
public $code;
#[Validate('required|string')]
public $phone;
#[Validate('required|string')]
public $email;
#[Validate('required|string')]
public $published_at;
#[Validate('required|string')]
public $carrying_capacity;
#[Validate('required|string')]
public $number_of_floors;
#[Validate('required|string')]
public $center_statement;
#[Validate('required|string')]
public $rate;
#[Validate('required|string')]
public $includes_women;
#[Validate('required|string')]
public $training_courses_support;
#[Validate('required|string')]
public $training_courses;
#[Validate('required|string')]
public $course_rate;
#[Validate('required|string')]
public $committees;
#[Validate('required|string')]
public $committee_report;
#[Validate('required|string')]
public $committee_active;
#[Validate('required|string')]
public $center_duration;
#[Validate('required|string')]
public $center_needs;
#[Validate('required|string')]
public $center_study;
#[Validate('required|string')]
public $rate_study;
#[Validate('required|string')]
public $team_plane;
#[Validate('required|string')]
public $center_active;
#[Validate('required|string')]
public $activity_report;
#[Validate('required|string')]
public $difference_cooperate;
#[Validate('required|string')]
public $root_help;
#[Validate('required|string')]
public $root_is_fare;
#[Validate('required|string')]
public $root_rate;
#[Validate('required|string')]
public $many_help;
#[Validate('required|string')]
public $help_rate;
#[Validate('required|string')]
public $works_to_maximize;
#[Validate('required|string')]
public $center_tools;
#[Validate('required|string')]
public $alternative_plans;
#[Validate('required|string')]
public $rate_center_tools;
#[Validate('required|string')]
public $center_team;
#[Validate('required|string')]
public $center_benefit;
#[Validate('required|string')]
public $center_coordinate;
#[Validate('required|string')]
public $coordinate_rate;
#[Validate('required|string')]
public $good_equipment;
#[Validate('required|string')]
public $good_team_data;
#[Validate('required|string')]
public $training_course;
#[Validate('required|string')]
public $adopting_controlled;
#[Validate('required|string')]
public $adopting_rate;
#[Validate('required|string')]
public $assistance_provided;
#[Validate('required|string')]
public $center_tech;
#[Validate('required|string')]
public $follow_up;
#[Validate('required|string')]
public $evaluation_system;
#[Validate('required|string')]
public $center_vision;
#[Validate('required|string')]
public $difficult_challenges;
#[Validate('required|string')]
public $previous_expertise;
#[Validate('required|string')]
public $center_partners;
#[Validate('required|string')]
public $rate_support;
#[Validate('required|string')]
public $center_ability;
#[Validate('required|string')]
public $center_technology;
#[Validate('required|string')]
public $center_speed;
#[Validate('required|string')]
public $universe;

public $governorates;

    public function mount()
    {
        $this->governorates=Governorate::all();
    }


    public function report()
    {
//        $this->validate();

        $question=\App\Models\Question::create([
            'name'=>$this->name,
            'job'=>$this->job,
            'governorate'=>$this->governorate,
            'residence'=>$this->residence,
            'Years_of_experience'=>$this->Years_of_experience,
            'gender'=>$this->gender,
            'graduation'=>$this->graduation,
            'date_of_visit'=>$this->date_of_visit,
            'mode_by'=>$this->mode_by,
            'center_name'=>$this->center_name,
            'address'=>$this->address,
            'code'=>$this->code,
            'phone'=>$this->phone,
            'email'=>$this->email,
            'published_at'=>$this->published_at,
            'carrying_capacity'=>$this->carrying_capacity,
            'number_of_floors'=>$this->number_of_floors,
            'center_statement'=>$this->center_statement,
            'rate'=>$this->rate,
            'includes_women'=>$this->includes_women,
            'training_courses_support'=>$this->training_courses_support,
            'training_courses'=>$this->training_courses,
            'course_rate'=>$this->course_rate,
            'committees'=>$this->committees,
            'committee_report'=>$this->committee_report,
            'committee_active'=>$this->committee_active,
            'center_duration'=>$this->center_duration,
            'center_needs'=>$this->center_needs,
            'center_study'=>$this->center_study,
            'rate_study'=>$this->rate_study,
            'team_plane'=>$this->team_plane,
            'center_active'=>$this->center_active,
            'activity_report'=>$this->activity_report,
            'difference_cooperate'=>$this->difference_cooperate,
            'root_help'=>$this->root_help,
            'root_is_fare'=>$this->root_is_fare,
            'root_rate'=>$this->root_rate,
            'many_help'=>$this->many_help,
            'help_rate'=>$this->help_rate,
            'works_to_maximize'=>$this->works_to_maximize,
            'center_tools'=>$this->center_tools,
            'alternative_plans'=>$this->alternative_plans,
            'rate_center_tools'=>$this->rate_center_tools,
            'center_team'=>$this->center_team,
            'center_benefit'=>$this->center_benefit,
            'center_coordinate'=>$this->center_coordinate,
            'coordinate_rate'=>$this->coordinate_rate,
            'good_equipment'=>$this->good_equipment,
            'good_team_data'=>$this->good_team_data,
            'training_course'=>$this->training_course,
            'adopting_controlled'=>$this->adopting_controlled,
            'adopting_rate'=>$this->adopting_rate,
            'assistance_provided'=>$this->assistance_provided,
            'center_tech'=>$this->center_tech,
            'follow_up'=>$this->follow_up,
            'evaluation_system'=>$this->evaluation_system,
            'center_vision'=>$this->center_vision,
            'difficult_challenges'=>$this->difficult_challenges,
            'previous_expertise'=>$this->previous_expertise,
            'center_partners'=>$this->center_partners,
            'rate_support'=>$this->rate_support,
            'center_ability'=>$this->center_ability,
            'center_technology'=>$this->center_technology,
            'center_speed'=>$this->center_speed,
            'universe'=>$this->universe,
        ]);
        session()->flash('status', 'تم الارسال ');

    }
    public function render()
    {
        return view('livewire.question');
    }
}
