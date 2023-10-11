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
    public function index(Request $request)
    {
        $query = $request->input('query');
    
        // queryが存在すれば検索処理を行い、存在しなければ全件取得
        if($query){
            $todos = Todo::where('task_name', 'LIKE', "%{$query}%")->orderBy('id', 'asc')->get();
        } else {
            $todos = Todo::orderBy('id', 'asc')->get();
        }
    
        return view('home', compact('todos'));
    }
}
