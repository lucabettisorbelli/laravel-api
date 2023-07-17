@extends('layouts.admin')

@section('content')

<div class="container-fluid mt-4">
    <div class="row justify-content-between">
        @foreach ($projects as $project)
            <div class="card p-0 mb-4" style="width: 18rem;">
                <img class="card-img-top" src="{{ $project->image }}" alt="{{ $project->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $project->title }}</h5>
                    <h6 class="card-title">{{ $project->description }}</h6>
                    <h6 class="card-title">{{ $project->type?->name }}</h6>
                    <a href="{{ route("admin.projects.show", $project) }}" class="btn btn-primary">Mostra dettagli</a>
                    <a href="{{ route("admin.projects.edit", $project) }}" class="btn btn-primary">Modifica progetto</a>
                    <p>Tecnologie: 
                        @forelse ($project->technologies as $technology)
                            <span>{{$technology->name}}</span>
                        @empty
                            <span>Nessuna</span>
                        @endforelse
                </div>
            </div>
        @endforeach
    </div>
</div>



@endsection