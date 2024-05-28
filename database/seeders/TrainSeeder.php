<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        
        DB::table('trains')->truncate();

        $companies = ['Trenitalia', 'TreNord', 'Italo'];

        for ($i = 0; $i < 30; $i++){
            $new_train = new Train();

            $new_train -> owner = $faker->randomElement($companies);
            $new_train -> departure = $faker->city();
            $new_train -> destination = $faker->city();
            $new_train -> departure_time = $faker->dateTimeBetween('-1 day', '+1 day');
            $new_train -> arrival_time = $faker->dateTimeBetween('+1 day','+2 day');
            $new_train -> train_code = $faker->bothify('??######');
            $new_train -> wagons = $faker->numberBetween(4,12);
            $new_train -> on_time = $faker->boolean();
            $new_train -> cancelled = $faker->boolean();

            $new_train->save();
        }
    }
}
