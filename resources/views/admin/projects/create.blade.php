@extends('layouts.admin')

@section('content')

<div class="container-fluid mt-4">
    <div class="row justify-content-between">
        <h1>Crea un nuovo post</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route("admin.projects.store") }}" method="POST" class="needs-validation">
            @csrf
            

            <label for="title">Titolo</label>
            <input type="text" name="title" id="title" value="{{ old("title") }}" class="form-control mb-4">

            <label for="category_id">Tipo</label>
            <select class="form-control mb-4" name="type_id" id="type_id">
                <option value="" selected disabled>Seleziona il tipo</option>
                @foreach ($types as $type)
                    <option value="{{$type->id}}">{{$type->name}}</option>
                @endforeach
            </select>

            @foreach ($technologies as $i => $technology)
            <div class="form-check">
                <input type="checkbox" value="{{$technology->id}}" name="technologies[]" id="technologies{{$i}}" class="form-check-input" >
                <label for="technologies{{$i}}" class="form-check-label">{{$technology->name}}</label>
            </div>
            @endforeach

            <label for="description">Descrizione</label>
            <textarea name="description" id="description" cols="30" rows="10" class="form-control mb-4">{{ old("description") }}</textarea>

            <label for="image">URL Immagine</label>
            <input type="text" name="image" id="image" value="{{ old("image") }}" class="form-control mb-4">

            <input type="submit" class="btn btn-primary form-control mb-4" value="Crea post">
        
        </form>
    </div>
</div>

@endsection