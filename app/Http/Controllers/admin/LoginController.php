<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    
    protected $redirectTo = 'admin/paquete';
    
    public function __construct()
    {
       $this->middleware('guest')->except('logout');
    }
}
