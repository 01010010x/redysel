<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = User::create([
            'name' => 'REDYSEL',
            'email' => 'soporte@redysel.com',
            'password' => Hash::make('qwerty123'),
            'is_admin' =>1
        ]);

        $usuario = User::create([
            'name' => 'Juan Pablo',
            'email'=> 'jpblo@gmail.com',
            'password'=> Hash::make('c0sm0R0yal3r0'),
            'is_admin' =>0
        ]);
        $usuario = User::create([
            'name' => 'Gael Martinez',
            'email'=> 'Gmz@gmail.com',
            'password'=> Hash::make('c0sm0R0yal3r0'),
            'is_admin' =>0
        ]);
        $usuario = User::create([
            'name' => 'Alex Marin',
            'email'=> 'AlxM@gmail.com',
            'password'=> Hash::make('c0sm0R0yal3r0'),
            'is_admin' =>0
        ]);
    }
}
