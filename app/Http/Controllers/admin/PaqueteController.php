<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Paquete;
use App\Imagen;

class PaqueteController extends Controller
{
    public function index()
    {
        // $paquetes = Paquete::with('imagenes')->paginate(2); // Cambia 10 al número deseado de elementos por página
        // return view('admin.paquete', compact('paquetes'));


        $paquetes = DB::table('paquetes')->paginate(5);
        return view('admin.paquete', ['paquetes' => $paquetes]);
    }

    public function eliminar(Request $request)
    {
        try {
            $idPaquete = $request->paquete_id;
            Paquete::find($idPaquete)->delete();
        } catch (\Exception $excepcion) {
            return redirect()->route('paquete_index')->withErrors(['message' => 'Producto asociado a un carrito']);
        }
        return redirect()->route('paquete_index');
    }
    public function filtrar(Request $request)
    {
        $opc = $request->opc;
        $valor = $request->valor;
        $operador = '>=';
        if ($opc == 'nombre') {
            $operador = 'like';
            $valor = '%' . $valor . '%';
        }
        $paquetes = DB::table('paquetes')->where($opc, $operador, $valor)->paginate(5);
        $paquetes->appends(['opc' => $opc, 'valor' => $valor]);
        return view('admin.paquete', ['paquetes' => $paquetes]);

    }


    public function registrar(Request $request)
    {

        try {
            $paquete = new Paquete();

            $nombre = $request->nombre;
            $subt = $request->subtitulo;
            $descripcion = $request->descripcion;
            $precio = $request->precio;
            $folio = $request->folio;

            if (isset($request->paquete_id)) {
                $id = $request->paquete_id;
                $paquete = Paquete::find($id);
            }

            $paquete->nombre = $nombre;
            $paquete->subtitulo = $subt;
            $paquete->descripcion = $descripcion;
            $paquete->precio = $precio;
            $paquete->folio = $folio;
            $paquete->save();


            // $imagenesPaquete = $paquete->imagenes;



            // foreach ($request->descImagen as $clave => $valor) {
            //     $imagen = new Imagen();

            //     if (!empty($request->idImagen[$clave])) {
            //         $id = $request->idImagen[$clave];
            //         $imagen = Imagen::find($id);

            //         // Eliminar la imagen anterior siempre
            //         Storage::delete($imagen->ruta);
            //     }

            //     $imagen->descripcion = $valor;

            //     if (!empty($request->imagen[$clave])) {
            //         $campo = $request->imagen[$clave];
            //         $ruta = $campo->store('img/paquetes/nuevos');
            //         $imagen->ruta = $ruta;
            //     }

            //     $paquete->imagenes()->save($imagen);
            // }

            // // Ahora, si hay imágenes antiguas, pero no están presentes en la solicitud, desasócialas del paquete
            // foreach ($imagenesPaquete as $imagenPaquete) {
            //     if (!in_array($imagenPaquete->id, (array) $request->idImagen)) {
            //         // Desasociar la imagen del paquete
            //         $imagenPaquete->paquete_id = null;
            //         $imagenPaquete->save();
            //     }
            // }

            return redirect()->route('paquete_index')->with('success', 'Paquete agregado con éxito');

        } catch (\Exception $excepcion) {
            return redirect()->route('paquete_index')->withErrors(['message' => 'Error al registrar el paquete']);
        }
    }

    //     public function eliminarImagen(Request $request, $id)
// {
//     try {
//         // Obtén el ID de la imagen desde la solicitud
//         $idImagen = $request->idImagen;

    //         // Encuentra la imagen en la base de datos
//         $imagen = Imagen::findOrFail($idImagen);

    //         // Elimina la imagen del sistema de archivos
//         if (file_exists(public_path($imagen->ruta))) {
//             unlink(public_path($imagen->ruta));
//         }

    //         // Elimina la imagen de la base de datos
//         $imagen->delete();

    //         // Recarga el paquete con las imágenes actualizadas
//         $paquete = Paquete::with('imagenes')->findOrFail($id);
//         $paquetes = Paquete::with('imagenes')->paginate(2); 

    //     } catch (\Exception $excepcion) {
//         return redirect()->route('paquete_index')->withErrors(['message' => 'Paquete e imagen asociado a un carrito']);
//     }

    //     return view('admin.formularioPaquete')->with(['paquete' => $paquete, 'paquetes' => $paquetes]);
// }


    public function mostrar()
    {
        $paquetes = DB::table('paquetes')->paginate(5);
        return view('admin.formularioPaquete', compact('paquetes'));
    }

    public function editar($id)
    {
        // $paquete = Paquete::find('imagenes')->findOrFail($id);
        // $paquetes = Paquete::with('imagenes')->paginate(2);  // O cualquier lógica para obtener los paquetes necesarios
        $paquete = Paquete::find($id);
        $paquetes = DB::table('paquetes')->paginate(5); // O cualquier lógica para obtener los paquetes necesarios

        return view('admin.formularioPaquete')->with(['paquete' => $paquete, 'paquetes' => $paquetes]);
    }

}