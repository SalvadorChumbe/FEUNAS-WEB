<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\role;
use App\Models\permiso;

Route::get('/', function () {

    return view('welcome');

});

Route::get('welcome', function () {

    return view('welcome');

});



Auth::routes();

Route::get('/home', 'HomeController@index');

<<<<<<< HEAD
Route::get('/eventos', 'EventosController@index'); 
Route::post('/eventos/registrar', 'EventosController@store'); 
Route::get('/eventos/show', 'EventosController@show');

=======
Route::get('eventos/index', [EventosController::class, 'eventos/index']); 
>>>>>>> f2a1fd2da96f2a6240d154e78826f4d172e901f3

Route::resource('eventos/index','EventosController');



Route::get('/eventos/calendar', function () {

    return view('eventos.calendar');

});

Route::get('/auth/login', function () {
  
    return view('auth.login');

});

Route::get('reportes/deudas', function () {

    return view('reportes.deudas');

});

Route::get('/facultades/administracion','AdministratorController@index');

Route::post('/facultades/administracion/edit','UserController@update');

Route::get('/facultades/agronomia', function () {

    return view('facultades.agronomia');

});

Route::get('/facultades/ambiental', function () {
 
    return view('facultades.ambiental');

});

Route::get('/facultades/suelos', function () {
 
    return view('facultades.suelos');

});

Route::get('/facultades/contabilidad', function () {
 
    return view('facultades.contabilidad');

});

Route::get('/facultades/economia', function () {
   
    return view('facultades.economia');

});

Route::get('/facultades/forestal', function () {
  
    return view('facultades.forestal');

});

Route::get('/facultades/industrias', function () {
 
    return view('facultades.industrias');

});

Route::get('/facultades/sistemas', function () {
   
    return view('facultades.sistemas');

});

Route::get('/facultades/mecanica', function () {
   
    return view('facultades.mecanica');

});

Route::get('/facultades/recursos', function () {
   
    return view('facultades.recursos');

});

Route::get('/facultades/zootecnia', function () {
   
    return view('facultades.zootecnia');

});


Route::resource('users','UserController');


Route::get('users/{id}/edit/','UserController@edit');


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

route::get('/roles', function(){
    /*
    return role::create([
        'name' => 'Presidente',
        'slug' => 'admin',
        'description' => 'Administrador General',
        'full-access' => 'yes',
    ]);
    */
    
    /*
    return role::create([
        'name' => 'Tesorero',
        'slug' => 'admin',
        'description' => 'Administrador Cobrador',
        'full-access' => 'yes',
    ]);
    */
    
    /*
    return role::create([
        'name' => 'Secretario/a',
        'slug' => 'admin',
        'description' => 'Administrador Secretario',
        'full-access' => 'yes',
    ]);
    */
    
    /*
    $user = User::find(1);
    return $user;
    */

    /**Asignar rol a un usuario
     * $user->roles()->attash([id_rol_1, id_rol_n]);
     */

     /**Eliminar rol de un usuario
     * $user->roles()->detash([id_rol]);
     */

     /**Fijar rol de un usuario
     * $user->roles()->sync([id_rol_1, id_rol_n]);
     */
    
    /* 
    return permiso::create([
        'name' => 'Crear Actividad',
        'slug' => 'actividad.create',
        'description' => 'Administrador puede crear una actividad',
    ]);
    */

    /*
    return permiso::create([
        'name' => 'Editar Actidad',
        'slug' => 'actividad.update',
        'description' => 'Administrador puede editar una actividad',
    ]);
    */
    
    /*
    return permiso::create([
        'name' => 'Borrar Actidad',
        'slug' => 'actividad.delete',
        'description' => 'Administrador puede borrar una actividad',
    ]);
    */
    
    /*
    return permiso::create([
        'name' => 'Editar deuda Alumno',
        'slug' => 'Editar.deuda',
        'description' => 'Administrador o tesorero puede editar la deuda de un estudiante',
    ]);
    */

    $rol = role::find(9);
    return $rol;


});
