<?php

use Illuminate\Database\Seeder;
use App\Envio;

class EnvioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Envio::create([
            'transportista' =>'REDYSEL',
            'precio'=> 130,
            'servicio' =>'nomal'

        ]);
    }
}
