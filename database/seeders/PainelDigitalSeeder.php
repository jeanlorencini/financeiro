<?php

use App\Models\PainelDigital;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PainelDigitalSeeder extends Seeder
{
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            PainelDigital::create([
                'nome' => $faker->word,
                'localizacao' => $faker->streetAddress,
                'disponivel_para_venda' => $faker->boolean,
                'disponivel_para_aluguel' => $faker->boolean,
                'preco_compra' => $faker->randomFloat(2, 100, 1000),
                'preco_venda' => $faker->randomFloat(2, 1000, 2000),
            ]);
        }
    }
}
