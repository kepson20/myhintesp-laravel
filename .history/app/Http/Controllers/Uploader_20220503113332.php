<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Uploader extends Controller
{
    public function index(Request $request)
    {
       $departements = DB::select('select * from departements');
        dd('bonn')
       return view('dashboard', compact($departements));
       
    }
}
