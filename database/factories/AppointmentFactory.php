<?php
namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appointment>
 */
class AppointmentFactory extends Factory
{
    public function definition(): array
    {
        $services = [
            'Technical Consultation',
            'General Support',
            'Custom Consultation',
            'System Integration',
            'API Maintenance'
        ];

        $statuses = ['confirmed', 'pending', 'cancelled'];

        return [
            'user_id' => User::factory(),
            'client_name' => fake()->name(),
            'service' => fake()->randomElement($services),
            'date' => fake()->dateTimeBetween('now', '+1 month')->format('Y-m-d'),
            'time' => fake()->randomElement(['09:00', '10:30', '14:00', '15:30', '17:00']),
            'status' => fake()->randomElement($statuses),
        ];
    }
}