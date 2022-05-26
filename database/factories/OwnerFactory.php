<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Owner>
 */
class OwnerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'primary_phone' => '09' . rand(10000000, 99999999),
            'secondary_phone' => '09' . rand(10000000, 99999999),
            'address' => $this->faker->address,
            'email' => $this->faker->email,
        ];
    }
}
