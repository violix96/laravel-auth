@extends('layouts.admin')

@section('content')
    <h1>Modifica progetto</h1>
    <form action="{{ route('projects.update', $project->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $project->title }}" required>
        </div>
        <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea name="description" id="description" class="form-control">{{ $project->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="languages">Linguaggi</label>
            <input type="text" name="languages" id="languages" class="form-control" value="{{ $project->languages }}"
                required>
        </div>
        <button type="submit" class="btn btn-primary">Modifica</button>
    </form>
@endsection
