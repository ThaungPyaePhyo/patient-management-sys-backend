<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Volunteer>
 */
class VolunteerFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'code' => strtoupper(Str::random(10)),
            'password' => Hash::make('password'),
        ];
    }
}