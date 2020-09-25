<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers; 

class AdministratorController extends Controller
{
    use AuthenticatesUsers;

    protected $loginView = 'administrators.login';
}
