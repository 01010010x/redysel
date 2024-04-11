<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    
    protected $fillable = [
        'name', 'email', 'password',
    ];

 public function carrito() {
    return $this->hasOne('App\Carrito');
    
 }
 public function perfil() {
    return $this->hasOne('App\Perfil');
    
 }

 public function pedidos(){
    return $this->hasMany('App\Pedido');
 }

 public function isAdmin()
    {
        return $this->is_admin == 1;
        // php artisan db:seed --class=UserTableSeeder
    }


    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
