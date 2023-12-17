@extends('layouts.app')

@section('content')
    <h1>Projects</h1>

    <div class="container">
        <a href="{{ route('projects.create') }}" class="btn btn-primary">Add Project</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($projects as $project)
                    <tr>
                        <td>{{ $project->id }}</td>
                        <td>{{ $project->name }}</td>
                        <td>{{ $project->description }}</td>
                        <td>
                            <a href="{{ route('projects.show', $project->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-primary">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection