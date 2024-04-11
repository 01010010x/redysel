<?php

use Illuminate\Database\Seeder;
use App\PlataformaPago;

class PlataformaPagoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PlataformaPago::create([
            'nombre'=>'Paypal',
            'imagen'=>'img/pago/paypal.jpg'
        ]);
    }
}
