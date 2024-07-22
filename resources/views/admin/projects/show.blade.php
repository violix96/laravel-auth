@extends('layouts.app')

@section('content')
    <div class="container bg-primary py-3" style="color: white">
        <h1>{{ $project->title }}</h1>
        <p>{{ $project->description }}</p>
        <p><strong>Linguaggi:</strong> {{ $project->languages }}</p>
        <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-warning">Modifica</a>
        <form action="{{ route('projects.destroy', $project->id) }}" method="POST" style="display:inline-block;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
@endsection
