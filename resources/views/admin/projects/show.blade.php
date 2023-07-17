@extends('layouts.admin')

@section('content')

<div class="container-fluid mt-4">
    <div class="row justify-content-between">
        <h1>{{ $project->title }}</h1>
        <p><h2>Descrizione:</h2>{{ $project->description }}</p>
        <h2>tipo: {{ $project->type ? $project->type->name : "Senza tipo" }}</h2>
        <h2>Tecnologie:</h2>
        <ul>
            @foreach ($project->technologies as $technology)
            <li>{{$technology->name}}</li>
            @endforeach
        </ul>
        <form action="{{ route('admin.projects.destroy', $project) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Cancella progetto</button>
        </form>
        
        <img src="{{ $project->image }}" alt="{{ $project->title }}" />
    </div>
</div>

@endsection