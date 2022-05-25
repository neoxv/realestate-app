<?php

namespace Database\Seeders;

use App\Models\Property;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Property::factory()->count(4)->create([
            'owner_id' => 1,
        ]);

        Property::factory()->count(6)->featured()->create([
            'owner_id' => 1,
        ]);
    }
}
