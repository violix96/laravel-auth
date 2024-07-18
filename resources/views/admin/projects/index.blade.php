@extends('layouts.admin')

@section('content')
    <h1>Lista dei progetti</h1>
    <a href="{{ route('projects.create') }}" class="btn btn-primary">Crea un nuovo progetto</a>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Languages</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->languages }}</td>
                    <td>
                        <div class="d-flex gap-2">
                            <a href="{{ route('projects.show', $project->id) }}" class="btn btn-info"><i
                                    class="fa-solid fa-magnifying-glass"></i></a>
                            <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-warning"><i
                                    class="fa-solid fa-pencil"></i></a>
                            <form action="{{ route('projects.destroy', $project->id) }}" method="POST"
                                style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
