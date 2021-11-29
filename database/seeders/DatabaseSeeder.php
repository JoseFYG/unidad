<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\Hermano::factory(50)->create();
        \App\Models\Cuota::factory(100)->create();
        \App\Models\Donativo::factory(50)->create();
        \App\Models\User::factory(1)->create();
    }
}
