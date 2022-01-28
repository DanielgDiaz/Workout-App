<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Workout;
use App\Models\Wod;
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
        User::factory(10)->create();
        Category::factory(3)->create();
        Workout::factory(10)->create();
        Wod::factory(50)->create();
    }
}
