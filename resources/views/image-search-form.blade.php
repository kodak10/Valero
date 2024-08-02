<!-- resources/views/image-search-form.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Importer une Image pour la Recherche</h2>
    <form action="{{ route('image.search') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Choisir une image</label>
            <input type="file" name="image" id="image" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Rechercher</button>
    </form>
</div>
@endsection
