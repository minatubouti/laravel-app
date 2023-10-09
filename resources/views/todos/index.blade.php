@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Todos</h1>
    <a href="{{ route('todos.create') }}" class="btn btn-primary">新しいTodoを追加</a>
    <ul>
        @foreach($todos as $todo)
            <li>{{ $todo->task_name }}</li>
        @endforeach
    </ul>
</div>
@endsection

