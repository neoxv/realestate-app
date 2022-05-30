<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name,
            'price'=>$this->faker->numberBetween(1000000,10000000),
            'address'=>$this->faker->streetAddress(),
            'city'=>$this->faker->city,
            'description'=>$this->faker->text,
            'bedroom'=>$this->faker->numberBetween(1,5),
            'bathroom'=>$this->faker->numberBetween(1,5),
            'area'=>$this->faker->numberBetween(100,1000),
            'closing_price'=>$this->faker->numberBetween(1000000, 10000000),
            'is_sold' => $this->faker->boolean,
            'owner_id'=>$this->faker->numberBetween(1,10),
            'feature_expiry_date'=>$this->faker->dateTime,
            'is_negotiable'=>$this->faker->boolean,
            'type'=>$this->faker->randomElement(['house', 'land', 'apartment', 'warehouse', 'building', 'shop']),
        ];
    }

    public function featured()
    {
        return $this->state(function (array $attributes) {
            return [
                'is_featured' => true,
            ];
        });
    }

}
