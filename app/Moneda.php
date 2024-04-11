<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Moneda extends Model
{
    protected $primaryKey = 'iso';
    public $incrementing = false;
    protected $fillable = [
        'iso',
    ];
}
