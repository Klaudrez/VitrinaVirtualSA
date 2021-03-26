<?php

use Illuminate\Support\Facades\Route;

Route::get('/','CarruselController@index')->name('main');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

////////////////////public routes//////////////////                                 el "PageController" sera de acceso publico 
//                                                                                  el 
Route::get('acercade', 'PageController@acercade')->name('acerca');
Route::get('cateprod','PageController@cateprod')->name('catp');
Route::get('contacto','PageController@contacto')->name('contacto');
Route::get('productos','PageController@productos')->name('productos');  // pendiente

////////////////////////////// public Route //////////////////////////////

Route::post('contacto/send','MensajesController@store')->name('sendmensaje');
Route::get('solidaria','SolidariosController@show')->name('solidaria');
Route::get('detalleprod/{id}','ProductosController@show')->name('detalleprod');
//Route::get('mensajes','MensajesController@mensajes')->name('mensajes');
Route::post('search','SearchController@searchbyText')->name('buscarprincipal');
Route::get('detalleserv/{id}','ServiciosController@show')->name('dserv');
Route::post('comentario/sent/{id}','CalificacionServiciosController@store')->name('sendcomentarioservicio');
Route::get('productos/categoria/{id}','ProductosController@showProductosByCategoria')->name('productoscategoria');
Route::post('comentarios/enviar/{id}','CalificacionProductosController@store')->name('subircomentarioproducto');

////////////////////////////  User Routes /////////////////////////////////////

Route::get('formularioserv','User\PageController@formularioserv')->name('formularioserv');
Route::get('formularioprod','User\PageController@formularioprod')->name('formularioprod');
Route::get('formulariosolidario','User\PageController@formulariosolidario')->name('formulariosolidario');
//Route::get('misproductos','User\PageController@misproductos')->name('misproductos');
Route::get('editarserv','User\PageController@editarserv')->name('editarserv');
Route::get('editarprod','User\PageController@editarprod')->name('editarprod');
Route::get('formeditarserv','User\PageController@formeditarserv')->name('formeditarserv');
Route::get('perfil','User\PageController@perfil')->name('perfil');

//////////////////////////// User Routes/////////////////////////////////

Route::post('producto/add','User\ProductosController@store')->name('addproducto');
Route::get('misproductos','User\ProductosController@showMisProductos')->name('misproductos');
Route::get('misproductos/eliminar{id}','User\ProductosController@destroy')->name('eliminarproductos');

////////////////////////////////////User Routes//////////////////////////////

Route::post('solidarios/enviar','User\SolidariosController@store')->name('enviarSolidario');
Route::get('missolidarios','User\SolidariosController@showPublicacionesSolidarias')->name('missolidarios');
Route::get('missolidarios/eliminar/{id}','User\SolidariosController@eliminar')->name('eliminarsolidario');
Route::post('formularioserv/add','User\ServiciosController@store')->name('addservicio');
Route::get('misserv','User\ServiciosController@viewMyServicios')->name('misserv');
Route::get('misserv/eliminar/{id}','User\ServiciosController@destroy')->name('eliminarservicio');
Route::post('perfil/edit/{id}','User\UserController@update')->name('editarperfil');


///////////////////////////////User Routes
Route::get('productos/editar/{id}','User\ProductosController@edit')->name('formeditarprod');
Route::get('servicios/editar/{id}','User\ServiciosController@edit')->name('editarserv');
Route::post('productos/editar/{id}','User\ProductosController@update')->name('editarprod');

////////////////// Admin routes////////////////////////////////
//                                                                                                      admin/
Route::prefix('admin')->group(function(){                                                       //Todos los links empiezan con /admin/
    
    /////////////////Controladores para logear al Admin////////////////////////////  
    
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');       
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/register', 'Auth\AdminRegisterController@showRegisterForm')->name('admin.register');
    Route::post('/register', 'Auth\AdminRegisterController@register')->name('admin.register.submit');
    
        /////////////////////////////////////////////////////////////////////////////////////

    Route::get('/', 'Admin\AdminController@index')->name('admin.dashboard');      
});



///////////////////////////////////////Producto routes////////////////////


//////////////////////////////// Admin Routes//////////////////////////////

Route::get('comentarios','Admin\CalificacionProductosController@showComentariosPendientes')->name('comentariosProductos');
Route::get('addcomentario/{id}','Admin\CalificacionProductosController@aprobar')->name('aprobarcalificacionproducto');
Route::get('rechazarcomentario/{id}','Admin\CalificacionProductosController@rechazar')->name('rechazarcalificacionproducto');





//////////////////////////////// Admin Routes/////////////////
Route::get('productos/validar','Admin\ProductosController@showPublicacionesPendientes')->name('validarpublicaciones');
Route::get('aprobarpublicacionproducto/{id}','Admin\ProductosController@aprobar')->name('aprobarpublicacionproducto');
Route::get('rechazarpublicacionproducto/{id}','Admin\ProductosController@rechazar')->name('rechazarpublicacionproducto');
Route::get('aprobarpublicacionservicio/{id}','Admin\ServiciosController@aprobar')->name('aprobarpublicacionservicio');
Route::get('rechazarpublicacionservicio/{id}','Admin\ServiciosController@rechazar')->name('rechazarpublicacionservicio');
Route::get('aprobarpublicacionsolidaria/{id}','Admin\SolidariosController@aprobar')->name('aprobarpublicacionsolidaria');
Route::get('rechazarpublicacionsolidaria/{id}','Admin\SolidariosController@rechazar')->name('rechazarpublicacionsolidaria');


//////////////////////////////// Admin Routes/////////////////

Route::get('admin/mensajes','Admin\MensajesController@index')->name('mensajes');
Route::get('admin/mensajes/eliminar/{id}','Admin\MensajesController@destroy')->name('eliminarmensaje');



//////////////////////////////// Admin Routes////////////////

Route::get('adddestacar','Admin\DestacadosController@indexNoDestacados')->name('adddestacar');
Route::get('destacar','Admin\DestacadosController@indexDestacados')->name('destacar');
Route::get('deletedestacar/{id}','Admin\DestacadosController@deleteProductoDestacado')->name('deletedestacado');
Route::get('destacarproducto/{id}','Admin\DestacadosController@addProductoDestacado')->name('destacarproducto');
Route::get('destacarservicio/{id}','Admin\DestacadosController@addServicioDestacado')->name('destacarServicio');
Route::get('comentarios/aprobar/{id}','Admin\CalificacionServiciosController@aprobar')->name('aprobarcalificacionservicio');
Route::get('comentarios/rechazar/{id}','Admin\CalificacionServiciosController@rechazar')->name('rechazarcalificacionservicio');

