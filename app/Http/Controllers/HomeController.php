<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;  // Todoモデルをインポート

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $todos = Todo::orderBy('id', 'asc')->get();
        return view('home', ['todos' => $todos]);  // ビューに$todosを渡す
    }
}
