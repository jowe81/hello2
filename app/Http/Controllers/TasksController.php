<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TasksController extends Controller
{
    //
    public function create(){
        return view('tasks.create');
    }
    
    public function store(){
        return Redirect('tasks.create',["f"=>request()->all()]);
        //return view('tasks.create',["f"=>request()->all()]);
    }
}
