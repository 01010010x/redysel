<?php

use Illuminate\Database\Seeder;
use App\CodigoPromocional;

class CodigoPromocionalTableSeeder extends Seeder
{
    
    public function run()
    {
        CodigoPromocional::create([
            'codigo'=>'LOVE_14',
            'descuento'=>'5',
            'fecha_ini'=>'2024-02-14',
            'fecha_fin'=>'2024-02-15'
        ]);
        CodigoPromocional::create([
            'codigo'=>'NUEVO_CODIGO',
            'descuento'=>'5',
            'fecha_ini'=>'2024-01-30',
            'fecha_fin'=>'2024-03-15'
        ]);
    }
}
