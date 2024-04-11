<?php

use Illuminate\Database\Seeder;
use App\Moneda;

class MonedaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Moneda::create([
            'iso'=>'MXN'
        ]);
    }
}
