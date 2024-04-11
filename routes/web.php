<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return redirect('/hogar');
});


Route::get('/negocio', function () {
    return view('negocio');
});


Route::get('/acercade', function () {
    return view('aboutUs');
});
Route::get('/seguridad', function () {
    return view('seguridad');
});
Route::get('/sucursales-y-cobertura', function () {
    return view('sucursales');
});
Route::get('/aviso-de-privacidad', function () {
    return view('privacidad');
});
Route::get('/codigo-de-politicas-y-gestion-de-la-red', function () {
    return view('gestion');
});
Route::get('/codigo-de-practicas-comerciales', function () {
    return view('comerciales');
});

Auth::routes();

Route::get('/negocio','NegocioController@index')->name('negocio');

Route::get('/hogar','ResidenciaController@index')->name('hogar');


//CARRITO
Route::post('/carrito/agregar', 'CarritoController@agregar')->name('carrito_agregar');
Route::get('/carrito/mostrar', 'CarritoController@mostrar')->name('carrito_mostrar');
Route::post('/carrito/modificar', 'CarritoController@modificar')->name('carrito_modificar');
Route::post('/carrito/eliminar', 'CarritoController@eliminar')->name('carrito_eliminar');




//PAGO
Route::post('/pago/index','PagoController@index')->name('pago_index');
Route::post('/pago/aplicarDescuento','PagoController@aplicarDescuento')->name('pago_aplicarDescuento');
    // PAYPAL
Route::post('/payments/pay','PaymentController@pay')->name('pay');
Route::get('/payments/approval','PaymentController@approval')->name('approval');
Route::get('/payments/cancelled','PaymentController@cancelled')->name('cancelled');


//PERFIL
Route::get('/perfil/editar','PerfilController@editar')->name('perfil_editar');
Route::post('/perfil/registrar','PerfilController@registrar')->name('perfil_registrar');
Route::get('/perfil/modificar','PerfilController@modificar')->name('perfil_modificar');







//ADMINISTRADOR

Route::get('/admin/login',function(){
    return view('admin/login');});

Route::post('/admin/login', 'Admin\LoginController@login')->name('admin_login');

Route::group(['middleware'=>['is_admin']], function(){

    // PEDIDOS

    Route::get('/admin/pedido/item/{id}','Admin\PedidoController@mostrar')->name('pedido_item');
    Route::get('/admin/item/{id}','Admin\PedidoController@mostrar')->name('pedido_item');
    Route::post('/admin/pedido/seguimiento','Admin\PedidoController@seguimiento')->name('pedido_seguimiento');
    Route::get('/admin/pedido/seguimiento','Admin\PedidoController@index')->name('pedido_index');
    Route::post('/admin/pedido/filtrar', 'admin\PedidoController@filtrar' )->name('pedido_filtrar');
    Route::get('/admin/pedido/filtrar','Admin\PedidoController@index')->name('pedido_index');
    Route::get('/admin/home', 'Admin\PedidoController@index')->name('pedido_index');

    // PAQUETES

    Route::get('/admin/paquete','Admin\PaqueteController@index')->name('paquete_index');
    Route::post('/admin/paquete/filtrar','Admin\PaqueteController@filtrar')->name('paquete_filtrar');
    Route::post('/admin/paquete/eliminar','Admin\PaqueteController@eliminar')->name('paquete_eliminar');
    Route::post('/admin/paquete/filtrar','Admin\PaqueteController@filtrar')->name('paquete_filtrar');
    Route::get('/admin/paquete/filtrar','Admin\PaqueteController@filtrar')->name('paquete_filtrar');
    Route::get('/admin/paquete/agregar','Admin\PaqueteController@mostrar')->name('paquete_agregar');
    Route::post('/admin/paquete/registrar','Admin\PaqueteController@registrar')->name('paquete_registrar');
    Route::get('/admin/paquete/editar/{id}','admin\PaqueteController@editar')->name('paquete_editar');

    
    Route::get('/admin/cliente','Admin\ClienteController@index')->name('cliente_index');
});
