<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\evento;
use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $event = DB::select('SELECT * FROM eventos ORDER BY start ASC');

        //dd($event);
        return view('home', compact('event'));
    }





}
