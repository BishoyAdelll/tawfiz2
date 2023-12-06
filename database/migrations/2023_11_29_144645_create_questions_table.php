<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('job');
            $table->string('governorate');
            $table->string('residence');
            $table->string('Years_of_experience');
            $table->string('gender');
            $table->string('graduation');
            $table->dateTime('date_of_visit');
            $table->string('mode_by');
            $table->string('center_name');
            $table->string('address');
            $table->string('code');
            $table->string('phone');
            $table->string('email');
            $table->date('published_at');
            $table->string('carrying_capacity');
            $table->string('number_of_floors');
            $table->tinyInteger('center_statement')->default(0);
            $table->string('rate');
            $table->tinyInteger('includes_women')->default(0);
            $table->tinyInteger('training_courses_support')->default(0);
            $table->tinyInteger('training_courses')->default(0);
            $table->string('course_rate');
            $table->tinyInteger('committees')->default(0);
            $table->string('committee_report');
            $table->tinyInteger('committee_active')->default(0);
            $table->string('center_duration');
            $table->tinyInteger('center_needs')->default(0);
            $table->tinyInteger('center_study')->default(0);
            $table->string('rate_study');
            $table->tinyInteger('team_plane')->default(0);
            $table->tinyInteger('center_active')->default(0);
            $table->string('activity_report');
            $table->tinyInteger('difference_cooperate')->default(0);
            $table->tinyInteger('root_help')->default(0);
            $table->tinyInteger('root_is_fare')->default(0);
            $table->string('root_rate');
            $table->tinyInteger('many_help')->default(0);
            $table->string('help_rate');
            $table->tinyInteger('works_to_maximize')->default(0);
            $table->tinyInteger('center_tools')->default(0);
            $table->tinyInteger('alternative_plans')->default(0);
            $table->string('rate_center_tools');
            $table->tinyInteger('center_team')->default(0);
            $table->tinyInteger('center_benefit')->default(0);
            $table->tinyInteger('center_coordinate')->default(0);
            $table->string('coordinate_rate');
            $table->tinyInteger('good_equipment')->default(0);
            $table->tinyInteger('good_team_data')->default(0);
            $table->tinyInteger('training_course')->default(0);
            $table->tinyInteger('adopting_controlled')->default(0);
            $table->string('adopting_rate');
            $table->tinyInteger('assistance_provided')->default(0);
            $table->tinyInteger('center_tech')->default(0);
            $table->tinyInteger('follow_up')->default(0);
            $table->tinyInteger('evaluation_system')->default(0);
            $table->tinyInteger('center_vision')->default(0);
            $table->string('difficult_challenges');
            $table->tinyInteger('previous_expertise')->default(0);
            $table->tinyInteger('center_partners')->default(0);
            $table->string('rate_support');
            $table->tinyInteger('center_ability')->default(0);
            $table->string('center_technology');
            $table->string('center_speed');
            $table->text('universe');
//            $table->foreignId('governorate_id')->references('id')->on('governorates')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
