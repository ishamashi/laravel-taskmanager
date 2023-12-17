@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Task</div>
                    <div class="panel-body">
                        <form action="{{ route('tasks.update', $task->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{ $task->name }}" required>
                            </div>
                            <div class="form-group">
                                <label for="project_id">Project:</label>
                                <select name="project_id" id="project_id" class="form-control" required>
                                    @foreach($projects as $project)
                                        <option value="{{ $project->id }}" {{ $task->project_id == $project->id ? 'selected' : '' }}>{{ $project->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="priority">Priority</label>
                                <input type="text" name="priority" id="priority" value="{{ $task->priority }}" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Update Task</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection