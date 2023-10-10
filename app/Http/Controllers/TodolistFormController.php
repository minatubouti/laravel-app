<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodolistFormController extends Controller
{
    public function createPage()
    {
        return view('todos.create');  // create.blade.phpのビューを返す
    }
    
   
}
