<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\OwnerSeeder;
use Database\Seeders\SettingSeeder;
use Database\Seeders\PropertySeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([UserSeeder::class, SettingSeeder::class, OwnerSeeder::class,PropertySeeder::class]);
    }
}
