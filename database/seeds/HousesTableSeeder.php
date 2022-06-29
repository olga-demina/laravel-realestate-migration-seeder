<?php

use App\House;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class HousesTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker) {
        $types = [
            'monolocale',
            'villa',
            'appartamento'
        ];

        //Inserire i record all'interno della tabella
        for ($i = 0; $i < 10; $i++) {
            $house = new House();
            $house->reference = 'ref' . $i;
            $house->address = $faker->streetAddress();
            $house->postal_code = $faker->postCode();
            $house->city = $faker->city();
            $house->state = 'USA';
            $house->square_meters = rand(20, 300);
            $house->rooms = rand(1, 10);
            $house->bathrooms = rand(1, 5);
            $house->energy_rating = rand(1, 10);
            $house->type = $types[rand(0, count($types) - 1)];
            $house->description = $faker->text();
            $house->price = rand(20000, 500000);

            // Per salvare i dati nel database
            $house->save();
        }
    }
}
