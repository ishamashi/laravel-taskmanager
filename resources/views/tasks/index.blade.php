@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Tasks</div>
                    <div class="panel-body">
                        <a href="{{ route('tasks.create') }}" class="btn btn-primary">Add Task</a>
                        <br><br>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Project</th>
                                <th>Priority</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($tasks as $task)
                                <tr>
                                    <td>{{ $task->name }}</td>
                                    <td>{{ $task->project->name }}</td>
                                    <td>{{ $task->priority }}</td>
                                    <td>
                                        <a href="{{ route('tasks.show', $task->id) }}" class="btn btn-default">View</a>
                                        <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-default">Edit</a>
                                        <form style="display: inline;" action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
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