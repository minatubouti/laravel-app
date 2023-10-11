<?php                                                                                                              

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ToDo;  

class TodolistFormController extends Controller
{
     // タスクを一覧で表示
     public function index()
     {
         $todos = Todo::orderBy('id', 'asc')->get();
         return view('todo_list', [
             "todos" => $todos
         ]);
     }
     
}
