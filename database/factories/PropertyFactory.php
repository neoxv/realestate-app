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
        $subcities = ['Addis Ketema', 'Akaky Kaliti', 'Arada', 'Bole', 'Gullele', 'Kirkos', 'Kolfe Keranio', 'Lemi Kura', 'Lideta', 'Nifas Silk-Lafto', 'Yeka'];
        return [
            'name'=>$this->faker->name,
            'price'=>$this->faker->numberBetween(1000000,10000000),
            'address'=>$this->faker->streetAddress(),
            'city'=>$this->faker->city,
            'subcity' => strtolower($this->faker->randomElement($subcities)),
            'description'=>$this->faker->text,
            'bedroom'=>$this->faker->numberBetween(1,5),
            'bathroom'=>$this->faker->numberBetween(1,5),
            'area'=>$this->faker->numberBetween(100,1000),
            'closing_price'=>$this->faker->numberBetween(1000000, 10000000),
            'is_brokered' => $this->faker->boolean,
            'is_rental' => $this->faker->boolean,
            'owner_id'=>$this->faker->numberBetween(1,10),
            'feature_from'=>$this->faker->dateTime,
            'feature_to' => $this->faker->dateTime,
            'is_negotiable'=>$this->faker->boolean,
            'type'=>$this->faker->randomElement(['house', 'land', 'apartment', 'warehouse/factory', 'building', 'shop','hotel/resort']),
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
