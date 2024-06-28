@extends('administration.layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Modifier l'Article</h4>
                    <form method="POST" action="{{ route('articles.update', $article->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="categorie_id">Catégorie</label>
                                    <select class="form-control" id="categorie_id" name="categorie_id">
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}" {{ $category->id == $article->categorie_id ? 'selected' : '' }}>{{ $category->nom }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="nom">Nom</label>
                                    <input type="text" class="form-control" id="nom" name="nom" value="{{ $article->nom }}">
                                </div>
                                <div class="form-group">
                                    <label for="surnoms">Surnoms (séparés par des virgules)</label>
                                    <input type="text" class="form-control" id="surnoms" name="surnoms" value="{{ $article->surnoms }}">
                                </div>
                                <div class="form-group">
                                    <label for="prix">Prix</label>
                                    <input type="number" class="form-control" id="prix" name="prix" value="{{ $article->prix }}">
                                </div>
                                {{-- <div class="form-group">
                                    <label>Couleurs</label><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="couleur_rouge" name="couleurs[]" value="rouge" {{ in_array('rouge', $article->couleurs) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="couleur_rouge" style="background-color: red;">Rouge</label>


                                        
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="couleur_bleu" name="couleurs[]" value="blue" {{ in_array('blue', $article->couleurs) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="couleur_bleu" style="background-color: blue;">Bleu</label>


                                        
                                    </div>
                                    <!-- Ajoutez d'autres couleurs si nécessaire -->
                                </div> --}}
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="taille_format">Taille / Format</label>
                                    <input type="text" class="form-control" id="taille_format" name="taille_format" value="{{ $article->taille_format }}">
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" id="description" name="description" rows="4">{{ $article->description }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="images">Images</label>
                                    <input type="file" class="form-control-file" id="images" name="images[]" multiple>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                        <a href="{{ route('articles.index') }}" class="btn btn-light">Annuler</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


@if(session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Succès!',
            text: '{{ session('success') }}',
        });
    </script>
@endif

@if ($errors->any())
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Erreur!',
            html: '<ul>@foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach</ul>',
        });
    </script>
@endif
@endsection
