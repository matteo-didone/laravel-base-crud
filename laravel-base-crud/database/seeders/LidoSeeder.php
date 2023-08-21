<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Lido;

class LidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        
        for($i = 0 ; $i <20 ; $i++){
            $newLido = new Lido();
            $newLido->nome = $faker->company();
            $newLido->località = $faker->city();
            $newLido->numero_ombrelloni = $faker->randomDigit(1, 99);
            $newLido->numero_lettini = $faker->randomDigit(1, 99);
            $newLido->prezzo_ombrellone_giorno = $faker->randomFloat(2, 10, 90);
            $newLido->data_apertura = $faker->dateTimeAD();
            $newLido->data_chiusura = $faker->dateTimeAD();
            $newLido->campo_beach_volley = $faker->boolean();
            $newLido->campo_calcio = $faker->boolean();
            $newLido->save();
        }
    }
}
