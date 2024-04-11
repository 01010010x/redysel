<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(PaqueteTableSeeder::class);
        $this->call(MunicipioTableSeeder::class);
        $this->call(EnvioTableSeeder::class);
        $this->call(MonedaTableSeeder::class);
        $this->call(CodigoPromocionalTableSeeder::class);
        $this->call(PlataformaPagoTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(PerfilTableSeeder::class);
    }
}
