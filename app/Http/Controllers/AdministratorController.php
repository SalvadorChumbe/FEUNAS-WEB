<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers; 
use App\Models\User;


class AdministratorController extends Controller
{
    use AuthenticatesUsers;

    protected $loginView = 'administrators.login';


    public function index(){
        $usuarios = User::all();
        
        return view('facultades.administracion',compact('usuarios'));
    }
    
}
