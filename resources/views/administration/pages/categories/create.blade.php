@extends('administration.layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Ajouter une Catégorie</h4>
                <form class="forms-sample" method="POST" action="{{ route('categories.store') }}" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                      <div class="col-lg-6">
                          <div class="form-group">
                              <label for="exampleInputName1">Nom</label>
                              <input name="nom" type="text" class="form-control" id="exampleInputName1" placeholder="Nom de la catégorie">
                          </div>
                      </div>
                      <div class="col-lg-6">
                          <div class="form-group">
                              <label>Image</label>
                              <div class="input-group col-xs-12">
                                  <input name="couverture" type="file" accept=".jpg,.png,.jpeg" class="form-control file-upload-info" placeholder="Importer l'image">
                              </div>
                          </div>
                      </div>
                  </div>
                  
                  <button type="submit" class="btn btn-primary me-2">Envoyer</button>
                  <button class="btn btn-light"><a href="{{ route('categories.index') }}">Annuler</a></button>
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
