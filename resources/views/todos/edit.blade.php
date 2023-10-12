@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="mb-4">ToDo List</h1>
            <div class="card">
                <div class="card-header">タスクの修正</div>
                <div class="card-body">
                    <form method="POST" action="/edit">
                        @csrf
                        <input type="hidden" name="id" value="{{$todo->id}}">
                        <div class="form-group">
                            <label for="task_name">タスクの名前</label>
                            <input type="text" class="form-control" id="task_name" name="task_name" value="{{$todo->task_name}}">
                        </div>
                        <div class="form-group">
                            <label for="task_description">タスクの説明</label>
                            <input type="text" class="form-control" id="task_description" name="task_description" value="{{$todo->task_description}}">
                        </div>
                        <div class="form-group">
                            <label for="assign_person_name">担当者の名前</label>
                            <input type="text" class="form-control" id="assign_person_name" name="assign_person_name" value="{{$todo->assign_person_name}}">
                        </div>
                        <div class="form-group">
                            <label for="estimate_hour">見積時間(h)</label>
                            <input type="number" class="form-control" id="estimate_hour" name="estimate_hour" value="{{$todo->estimate_hour}}">
                        </div>
                        <button type="submit" class="btn btn-primary">修正</button>
                    </form>
                    <a href="/home" class="btn btn-link mt-3">戻る</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
