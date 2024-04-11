<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;

class ClienteController extends Controller
{
    public function index()
    {
        try {
            $clientes = DB::table('users')
                ->leftJoin('perfils', 'users.id', '=', 'perfils.user_id')
                ->leftJoin('municipios', 'municipios.id', '=', 'perfils.municipio_id')
                ->select(
                    'users.id',
                    'perfils.id as perfil',
                    'perfils.direccion',
                    'perfils.telefono',
                    'users.name as nombre',
                    'users.email as email',
                    'municipios.nombre as municipio',
                    'users.is_admin'
                )
                ->paginate(4);

                // Obtén la información del administrador
        $admin = User::where('is_admin', 1)->first();

            return view('admin.cliente', ['clientes' => $clientes, 'admin' => $admin]);
        } catch (\Exception $e) {
            // Manejo de errores
            return redirect()->route('error')->with('message', $e->getMessage());
        }
    }

}