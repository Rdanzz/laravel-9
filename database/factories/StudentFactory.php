<?php

namespace Database\Factories;

use App\Models\Classroom;
use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = Faker::create('id_ID');
        return [
            'classroom_id' => $faker->randomElement([1,2,3,4,5,6]),
            'name' => $faker->name,
            'nis' => $faker->randomNumber(9),
            'gender' => $faker->randomElement(['L', 'P']),
        ];
    }
}
