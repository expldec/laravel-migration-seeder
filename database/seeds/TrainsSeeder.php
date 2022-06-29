<?php

use App\Train;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker) {
        $operators = [
            'Trenitalia',
            'Trenord',
            'NTV'
        ];
        $faketime = $faker->dateTimeInInterval('-1 day', '+3 days');

        for ($i = 0; $i < 10; $i++) {
            $train = new Train();
            $train->operator = $operators[rand(0, count($operators) - 1)];
            $train->start_station = $faker->city();
            $train->end_station = $faker->city();
            $train->departure_time = $faketime;
            $train->arrival_time = $faker->dateTimeInInterval($faketime, '+5 hours');
            $train->train_code = rand(10000000, 99999999);
            $train->cars = rand(1, 10);
            $train->is_on_time = rand(0, 1);
            $train->is_cancelled = rand(0, 1);

            // Per salvare i dati nel database
            $train->save();
        }
    }
}