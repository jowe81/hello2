<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NameController extends Controller
{
    //
    public function firstName(){
        return view('name',["t"=>"Johannes"]);
    }
    
    public function middleName(){
        return view('name',["t"=>"Markus"]);        
    }
    
    public function lastName(){
        return view('name',["t"=>"Weber"]);        
    }
}
