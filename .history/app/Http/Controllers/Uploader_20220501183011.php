<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Uploader extends Controller
{
    public function index(Request $request)
    {
        if(!empty($request))
        $fichier = $request->file('file')->extension();
        return $fichier;
    }
}
