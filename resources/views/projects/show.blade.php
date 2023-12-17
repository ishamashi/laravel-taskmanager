@extends('layouts.app')

@section('content')
    <h1>{{ $project->name }}</h1>

    <div class="container">
        <p>{{ $project->description }}</p>

        <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-primary">Edit Project</a>
    </div>
@endsection