<?php

namespace Database\Seeders;
use App\Models\Pastel;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PastelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i=0; $i<10; $i++){
            $pastel = new Pastel();
            $pastel->nombre = 'Pastel de ' . $faker->firstNameFemale;
            $array = ['chocolate', 'vainilla', 'cheesecake'];
            $num = $faker->numberBetween(0, 2);
            $pastel->sabor = $array[$num];
            $pastel->save();
        }
    }
}
