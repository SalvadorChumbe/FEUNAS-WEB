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

Route::get('/home', function () {
    return view('home');
});

Route::get('eventos', [EventosController::class, 'eventos']); 
Route::resource('eventos','EventosController');

Route::get('/eventos/calendar', function () {
    return view('eventos.calendar');
});

Route::get('/auth/login', function () {
    return view('auth.login');
});

Route::get('reportes/deudas', function () {
    return view('reportes.deudas');
});

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
