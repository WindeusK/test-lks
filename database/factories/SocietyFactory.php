<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Society>
 */
class SocietyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'password' => Hash::make('password'),
            'born_date' => now(),
            'gender' => $this->faker->randomElement(['male', 'female']),
            'address' => $this->faker->address(),
            'token' => Hash::make(md5($this->faker->nik())),
            'regional_id' => random_int(1, 34),
            'regional_province' => $this->faker->randomElement(['DKI jakarta', 'babel', 'sumsel']),
            'regional_district' => $this->faker->randomElement(['barat', 'utara', 'timur', 'selatan', 'pusat'])
        ];
    }
}
