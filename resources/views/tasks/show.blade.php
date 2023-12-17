@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Task Details</div>
                    <div class="panel-body">
                        <p><strong>Name:</strong> {{ $task->name }}</p>
                        <p><strong>Project:</strong> {{ $task->project->name }}</p>
                        <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-default">Edit Task</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection