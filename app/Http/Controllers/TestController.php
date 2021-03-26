<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function index() {
        echo "Test Controller @index";
    }
    
    public function showTS() {
        echo "Test Controller @showTS".time();        
    }
}
