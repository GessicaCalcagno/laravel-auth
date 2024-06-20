@extends('layouts.admin')
@section('content')
<div class="container">
    <h1>Modifica un nuovo Progetto</h1>
    <form action="{{ route('admin.projects.update', ['project' => $project->slug]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" name="title" class="form-control" id="title" value=""{{$project->title}} required>
        </div>
        <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea name="description" class="form-control" id="description" required>
            {{$project->description}}
            </textarea>
        </div>
        <div class="my-3">
            <button type="submit" class="btn btn-primary">Crea</button>
        </div>
    </form>
</div>
@endsection