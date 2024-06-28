@extends('administration.layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Modifier la Catégorie</h4>
                    <form method="POST" action="{{ route('categories.update', $category->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="nom">Nom</label>
                                    <input type="text" class="form-control" id="nom" name="nom" value="{{ $category->nom }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Image actuelle</label><br>
                                    <img src="{{ asset($category->image_path) }}" alt="Image de la catégorie" width="100">
                                </div>
                               
                            </div>
                            <div class="col-lg-6">
                               
                                <div class="form-group">
                                    <label>Nouvelle Image</label>
                                    <div class="input-group col-xs-12">
                                        <input type="file" name="couverture" class="form-control file-upload-info">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary me-2">Enregistrer</button>
                        <a href="{{ route('categories.index') }}" class="btn btn-light">Annuler</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
