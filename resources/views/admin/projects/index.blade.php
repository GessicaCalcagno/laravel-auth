@extends('layouts.admin')

@section('content')
    <h6>INDEX di PROJECTS</h6>
    {{-- i bottoni dentro il form --}}
    <a class="btn btn-primary" href="{{ route('admin.projects.create') }}">Crea</a>
    
    @if (session('message'))
        <div class="alert alert-success m-2">
            {{ session('message') }}
        </div>
    @endif

    <div class="container">
        <h1>Progetti</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titolo</th>
                    <th>Descrizione</th>
                    <th>Slug</th>
                    <th>Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <td>{{ $project->id }}</td>
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->description }}</td>
                        <td> <a class="btn btn-outline-success"
                                href="{{ route('admin.projects.show', ['project' => $project->slug]) }}">Dettagli</a></td>
                        <td>
                            <!-- Pulsanti -->
                            <div class="d-flex">

                                <a type="button" class="btn btn-outline-primary btn-sm me-2">
                                    <i class="fa-solid fa-pen"></i>
                                </a>
                                <!-- Button trigger modal -->
                                <form action="{{ route('admin.projects.destroy', ['project' => $project->slug]) }}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger btn-sm me-2" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
