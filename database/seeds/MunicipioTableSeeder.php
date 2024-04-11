<?php

use Illuminate\Database\Seeder;
use App\Municipio;

class MunicipioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Municipio::create([
            'nombre'=>'Yajalón'
        ]);
        Municipio::create([
            'nombre'=>'Ocosingo'
        ]);
        Municipio::create([
            'nombre'=>'Chilón'
        ]);
       
    }
}
