@extends('layouts.app')

@section('content')
    <h1>Edit Project</h1>

    <div class="container">
        <form action="{{ route('projects.update', $project->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $project->name }}" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" rows="5" class="form-control" required>{{ $project->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update Project</button>
        </form>
    </div>
@endsection