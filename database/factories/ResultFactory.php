<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Result>
 */
class ResultFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'mark_obtained' => fake()->randomNumber(),
            'student_id' => User::factory(),
            'teacher_id' => User::factory(),
            'subject_id' => Subject::factory(),
        ];
    }
}
