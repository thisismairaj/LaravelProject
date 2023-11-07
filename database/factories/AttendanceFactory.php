<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employee;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Attendance>
 */
class AttendanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'check_in' => $this->faker->dateTimeBetween('-1 month', 'now'),
            'check_out' => $this->faker->dateTimeBetween('now', '+1 month'),
            'working_hours' => $this->faker->randomFloat(2, 4, 12),
            'employee_id' => Employee::factory(),
        ];
    }
}
