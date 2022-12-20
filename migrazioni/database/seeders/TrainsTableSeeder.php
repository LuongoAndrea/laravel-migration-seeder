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
        // for ($i=0; $i < 10; $i++) { 

        // }
        $newtrain = new Train();
        $newtrain->Azienda = 'a';
        $newtrain->Stazione_di_partenza = 'a';
        $newtrain->Stazione_di_arrivo = 'a';
        $newtrain->Orario_di_partenza = '12/03/12';
        $newtrain->Orario_di_arrivo = '12/03/12';
        $newtrain->Codice_Treno = 'a';
        $newtrain->Numero_Carrozze = '1';
        $newtrain->stato = 'In orario';

    }
}