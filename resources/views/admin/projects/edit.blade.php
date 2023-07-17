@extends('layouts.app')

@section('content')
    <h1>Modifica</h1>

    <form action="{{ route('admin.projects.update', $project) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title', $project->title) }}">
        </div>

        <div>
            <label for="type_id">Type</label>
            <select name="type_id" id="type_id">
                @foreach ($types as $type)
                    <option value="{{ $type->id }}" {{ old('type_id', $project->type_id) == $type->id ? 'selected' : '' }}>{{ $type->name }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="technologies">Technologies</label>
            @foreach ($technologies as $technology)
                <input type="checkbox" name="technologies[]" id="technology-{{ $technology->id }}" value="{{ $technology->id }}" {{ in_array($technology->id, old('technologies', $project->technologies->pluck('id')->toArray())) ? 'checked' : '' }}>
                <label for="technology-{{ $technology->id }}">{{ $technology->name }}</label>
            @endforeach
        </div>

        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description">{{ old('description', $project->description) }}</textarea>
        </div>

        <div>
            <label for="image">Image URL</label>
            <input type="text" name="image" id="image" value="{{ old('image', $project->image) }}">
        </div>

        <button type="submit">Update</button>
    </form>
@endsection
