<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {


            $newtrain = new Train();
            $newtrain->Azienda = $faker->company();
            $newtrain->Stazione_di_partenza = $faker->city();
            $newtrain->Stazione_di_arrivo = $faker->city();
            $newtrain->Orario_di_partenza = 12 / 12 / 12;
            $newtrain->Orario_di_arrivo = 12 / 12 / 12;
            $newtrain->Codice_Treno = $faker->numerify('train-####');
            $newtrain->Numero_Carrozze = $faker->randomDigitNot(0);
            $newtrain->stato = 'In orario';
        }
    }
}