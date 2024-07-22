@extends('administration.layouts.app')

@section('content')

<style>
    .description-limit {
    max-width: 300px; /* Ajustez la largeur maximale selon vos besoins */
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

</style>
<div class="container">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="card-title d-flex justify-content-between align-items-center">
                    <h4 class="card-title mb-0">Articles</h4>
                    <a href="{{ route('articles.create') }}" class="btn btn-success">Ajouter</a>
                </div>
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>N°</th>
                        <th>Catégorie</th>
                        <th>Seconde Mains ?</th>
                        <th>Nom</th>
                        <th>Surnoms</th>
                        <th>Prix</th>
                        {{-- <th>Couleurs</th> --}}
                        <th>Taille / Format</th>
                        <th>Description</th>
                        <th>Images</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @if($articles->isEmpty())
                        <tr>
                            <td colspan="11" class="text-center">Aucun enregistrement d'article trouvé.</td>
                        </tr>
                        @else
                        @foreach($articles as $article)
                        <tr>
                            <td>{{ $loop->iteration }}</td> <!-- Utilisation de $loop pour obtenir l'itération actuelle -->
                            <td>{{ $article->categorie->nom }}</td> <!-- Supposant que 'categorie' est la relation et 'nom' est le champ à afficher -->
                            <td>{{ $article->second_mains ? 'Oui' : 'Non' }}</td>
                            <td>{{ $article->nom }}</td>
                            <td>{{ $article->surnoms }}</td>
                            <td>{{ $article->prix }}</td>
                            {{-- <td>
                                @foreach ($article->couleurs as $couleur)
                                    <span class="badge badge-primary">{{ $couleur }}</span>
                                @endforeach
                            </td> --}}
                            <td>{{ $article->taille_format }}</td>
                            <td>
                                <span class="description-limit">{{ $article->description }}</span>
                            </td>
                            <td>
                                @if($article->couverture)
                                
                               
                                    <img src="{{ asset('images/articles/' . $article->couverture) }}" alt="Image de la couverture" style="height: 80px !important; width: 80px !important; margin-right: 5px;">
                                @endif
                            
                            
                            </td>
                            <td>
                                <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-primary">Modifier</a>
                                <form action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet article?')">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                    
                  </table>
                </div>
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

@endsection()