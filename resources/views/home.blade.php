@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <h3>Your Tasks</h3>
                    <a href="/create-page" class="btn btn-primary mb-3">タスクを追加</a>
                    <table border="1">
                        <thead>
                            <tr>
                                <th>タスクの名前</th>
                                <th>タスクの説明</th>
                                <th>担当者の名前</th>
                                <th>見積もり時間(h)</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($todos as $todo)
                            <tr>
                                <td>{{ $todo->task_name }}</td>
                                <td>{{ $todo->task_description }}</td>
                                <td>{{ $todo->assign_person_name }}</td>
                                <td>{{ $todo->estimate_hour }}</td>
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
