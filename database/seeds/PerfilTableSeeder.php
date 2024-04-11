<?php

use Illuminate\Database\Seeder;
use App\Perfil;
class PerfilTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $perfil = Perfil::create([
            'user_id' => '2',
            'direccion'=> 'Barrio Guadalupe',
            'municipio_id'=>'1',
            'telefono'=>'9191232131'
        ]);
        $perfil = Perfil::create([
            'user_id' => '3',
            'direccion'=> 'Barrio Monte azul',
            'municipio_id'=>'2',
            'telefono'=>'9191235610'
        ]);
        $perfil = Perfil::create([
            'user_id' => '4',
            'direccion'=> 'Barrio peques',
            'municipio_id'=>'3',
            'telefono'=>'9198988761'
        ]);
    }
}
