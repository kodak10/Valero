@extends('administration.layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="card-title d-flex justify-content-between align-items-center">
                    <h4 class="card-title mb-0">Catégories</h4>
                    <a href="{{ route('categories.create') }}" class="btn btn-success">Ajouter</a>
                </div>
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>N°</th>
                        <th style="width: 60%">Nom</th>
                        <th>Image</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @if($categories->isEmpty())
                            <tr>
                                <td colspan="4" class="text-center">Aucun enregistrement de catégorie d'article trouvée.</td>
                            </tr>
                        @else
                            @foreach($categories as $category)
                            <tr>
                                <td>{{ $loop->iteration }}</td> <!-- Utilisation de $loop pour obtenir l'itération actuelle -->
                                <td style="width: 60%">{{ $category->nom }}</td>
                                <td><img src="{{ asset('images/articles/couvertures/' . $category->couverture) }}" alt="Image de la catégorie" style="height: 80px !important; width: 80px !important"></td>
                                <td>
                                    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary">Modifier</a>
                                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette catégorie?')">Supprimer</button>
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