@extends('layouts.admin')

@section('content')
    
        <h6>INDEX di PROJECTS</h6>
    

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
                        <td>{{ $project->slug }}</td>
                        <td>
                            <!-- Pulsanti -->
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
