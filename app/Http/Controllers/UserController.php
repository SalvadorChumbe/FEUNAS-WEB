<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use DataTables;
use Redirect,Response;

class UserController extends Controller
{
    public function index(){
        $usuarios = User::all();
        dd($usuarios);
        return view('facultades.administracion', compact('usuarios'));
    }

    public function update(Request $request){
        //dd($request);
        //dd($request);
        User::editardeuda($request);
        return redirect('/facultades/administracion');

    }

}