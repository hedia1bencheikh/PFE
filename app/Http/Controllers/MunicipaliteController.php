<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MunicipaliteController extends Controller
{
    public function index()
    {
        $municipalites=Municipalite::paginate(5);
      
        return view('backend/municipalite/show',compact('municipalites'));
        
   
    }
}
