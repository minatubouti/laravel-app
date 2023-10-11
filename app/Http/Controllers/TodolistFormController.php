<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo; 

class TodolistFormController extends Controller
{
    public function createPage()
    {
        return view('todos.create');  // create.blade.phpのビューを返す
    }

    public function create(Request $request)
    {
        $todo = new Todo;
        $todo->task_name = $request->task_name;
        $todo->task_description = $request->task_description;
        $todo->assign_person_name = $request->assign_person_name;
        $todo->estimate_hour = $request->estimate_hour;
        $todo->save();

        return redirect('home'); // 保存後にトップページにリダイレクト
    }
    
}
