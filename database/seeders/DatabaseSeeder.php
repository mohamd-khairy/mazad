<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\DayNumber;
use App\Models\Diet;
use App\Models\Food;
use App\Models\FoodMealType;
use App\Models\FoodType;
use App\Models\MealType;
use App\Models\State;
use App\Models\Target;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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

        User::create([
            'en' => ['name' => 'admin'],
            'ar' => ['name' => 'أدمن'],
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
            'type' => 'admin',
            'gender' => 'male'
        ]);
    }
}
