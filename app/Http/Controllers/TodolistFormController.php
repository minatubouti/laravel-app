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
    
    // 新規にタスクを登録するメソッド
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
   
    // 編集ページを表示するメソッド
    public function editPage($id)
    {
        $todo = Todo::find($id);
        return view('todos.edit', compact('todo'));
    }
   
    // 編集ページのフォームから送信されたデータを受け取り、データベースを更新する。
    public function edit(Request $request)
    {
        $todo = Todo::find($request->id);
        $todo->task_name = $request->task_name;
        $todo->task_description = $request->task_description;
        $todo->assign_person_name = $request->assign_person_name;
        $todo->estimate_hour = $request->estimate_hour;
        $todo->save();
        
        return redirect('/home'); // 更新後はホームにリダイレクト
    }

    // 削除確認ページを表示するメソッド
    public function deletePage($id)
    {
        $todo = Todo::find($id);
        return view('todos.delete', compact('todo'));
    }

    // タスクの削除を行う
    public function delete($id)
{
    $todo = Todo::find($id);
    $todo->delete();
    
    return redirect('/home'); // 削除後はホームにリダイレクト
}


    
}
