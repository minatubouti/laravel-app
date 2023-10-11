@extends('layouts.app')

@section('content')
<form method="GET" action="/home">
    <div class="input-group mb-3">
        <input type="text" class="form-control" name="query" placeholder="タスク名で検索" aria-label="Recipient's username" aria-describedby="button-addon2">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">検索</button>
        </div>
    </div>
</form>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">ダッシュボード</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3 class="mb-4">タスクの一覧</h3>

                    <a href="/create-page" class="btn btn-primary mb-3">タスクを追加</a>

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>タスクの名前</th>
                                <th>タスクの説明</th>
                                <th>担当者の名前</th>
                                <th>見積もり時間(h)</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($todos as $todo)
                            <tr>
                                <td>{{ $todo->task_name }}</td>
                                <td>{{ $todo->task_description }}</td>
                                <td>{{ $todo->assign_person_name }}</td>
                                <td>{{ $todo->estimate_hour }}</td>
                                <td>
                                    <a href="/edit-page/{{ $todo->id }}" class="btn btn-info">編集</a>
                                    
                                    <!-- タスク削除のためのフォーム -->
                                    <form action="/delete/{{ $todo->id }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">削除</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
