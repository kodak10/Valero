@extends('backend.layouts.master')

@section('content')
<div class="page-titles mb-7 mb-md-5">
    <div class="row">
      <div class="col-lg-8 col-md-6 col-12 align-self-center">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb align-items-center">
            <li class="breadcrumb-item">
              <a class="text-muted text-decoration-none" href="{{ route('admin.') }}">
                <i class="ti ti-home fs-5"></i>
              </a>
            </li>
            <li class="breadcrumb-item" aria-current="page">Ajouter un article</li>
          </ol>
        </nav>
        <h2 class="mb-0 fw-bolder fs-8">Ajouter un article</h2>

        
      </div>
     
    </div>

      @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  


    
  </div>
  <!-- start Basic Area Chart -->
  
  <form action="{{route('admin.articles.store')}}" method="post" id="article-form" enctype="multipart/form-data">
    @csrf
    <div class="row">
      
      
          <div class="col-lg-8 ">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center mb-2">
        
                    <button class="navbar-toggler border-0 shadow-none d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                      <i class="ti ti-menu fs-5 d-flex"></i>
                    </button>
                  </div>
                  
                    <div class="mb-4">
                      <label class="form-label">Nom de l'article <span class="text-danger">*</span>
                      </label>
                      <input type="text" class="form-control @error('name') is-invalid @enderror"  id="validationCustom03" value="{{ old('name') }}" name="name" id="validationCustom03" placeholder="Nom de l'article">
                        @error('name')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                      @enderror

                      <p class="fs-2">Un nom d'article est obligatoire et recommandé pour être unique.</p>
                    </div>
                    <div>
                        <label class="form-label">Description</label>
                        <div id="editor" name="description"></div> <!-- L'éditeur WYSIWYG -->
                        <input type="hidden" name="description" id="description-field" > <!-- Champ caché -->
                        <p class="fs-2 mb-0">Définissez une description de l'article pour une meilleure visibilité.</p>
                    </div>
                  
                  
                </div>
              </div>

                <div class="card">
                  <div class="card-body">
                    
                      <div class="mb-7">
                        <label class="form-label">Prix de base <span class="text-danger">*</span>
                        </label>
                        <input type="text" class="form-control  @error('price') is-invalid @enderror"  name="price" value="{{ old('price', '0') }}">
                        @error('price')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <p class="fs-2">Fixez le prix de l'article.</p>
                      </div>
                      <div class="mb-4">
                        <label class="form-label">Cet article est-il en promotion ?</label>
                        <div class="form-check form-switch">
                            <input type="checkbox" class="form-check-input" id="is_promotion" name="is_promotion" value="1" {{ old('is_promotion') ? 'checked' : '' }}>
                            <label class="form-check-label" for="is_promotion">Oui</label>
                        </div>
                    </div>

                    <!-- Détails de la promotion -->
                    <div id="promotion-details" style="display: none;">
                        <div class="mb-4">
                            <label class="form-label">Type de remise</label>
                            <select class="form-control" name="promotion_type">
                                <option value="percentage" {{ old('promotion_type') === 'percentage' ? 'selected' : '' }}>Pourcentage</option>
                                <option value="fixed" {{ old('promotion_type') === 'fixed' ? 'selected' : '' }}>Montant fixe</option>
                            </select>
                            @error('promotion_type')
                              <div class="invalid-feedback">
                                  {{ $message }}
                              </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Valeur de la remise</label>
                            <input type="text" class="form-control" name="promotion_value" value="{{ old('promotion_value') }}">
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Date de début de la promotion</label>
                            <input type="date" class="form-control" name="promotion_start" value="{{ old('promotion_start') }}">
                            @error('promotion_start')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Date de fin de la promotion</label>
                            <input type="date" class="form-control" name="promotion_end" value="{{ old('promotion_end') }}">
                        
                            @error('promotion_end')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                          </div>
                    </div>
                    
                  </div>
                </div>              
            
            <div class="card">
              <div class="row">
                  <div class="col-lg-6">
                    <div class="card-body">
                      <label class="form-label mb-2">Quantité (stock)</label>
                      <input type="number" class="form-control @error('quantite') is-invalid @enderror" name="quantite" value="{{ old('quantite', 3) }}" min="1" max="100" step="1" required>
    
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="card-body">
                    <label class="form-label mb-2">Second Mains ?</label>
                    <select class="form-control" id="second_mains" name="second_mains">
                      <option value="0" {{ old('second_mains') === "0" ? 'selected' : '' }}>Non</option>
                      <option value="1" {{ old('second_mains') === "1" ? 'selected' : '' }}>Oui</option>
                    </select>  
                  </div>
                </div>
              </div>
              
          </div>
          <div class="card">
            <div class="row">
              <div class="col-lg-12">
                <div class="card-body">
                  <label class="form-label mb-3">Choix des couleurs</label>

                  <div style="display: flex; flex-wrap: wrap; gap: 10px;">
                      @foreach ($colors as $color)
                          <div style="width: 50px; height: 50px; background-color: {{ $color->code }}; border-radius: 5px; display: flex; align-items: center; justify-content: center;">
                              <input type="checkbox" name="colors[]" id="color_{{ $color->id }}" value="{{ $color->id }}" style="cursor: pointer;">
                          </div>
                      @endforeach
                  </div>
                </div>

                
              </div>
            </div>
          </div>
          </div>
          <div class="col-lg-4">
              <div class="card">
                  <div class="card-body">
                    <div class="mb-3">
                      <label class="form-label">Catégories</label>
                      {{-- <select class="select2 form-control @error('categories') is-invalid @enderror" multiple="multiple" name="categories[]" value="{{ old('') }}">
                        @foreach ($categories as $categorie )
                          <option value="{{ $categorie->id}}">{{ $categorie->name}}</option>
                        @endforeach
                      
                        
                      </select> --}}
                      <select 
                          class="select2 form-control @error('categories') is-invalid @enderror" 
                          multiple="multiple" 
                          name="categories[]">
                          @foreach ($categories as $categorie)
                              <option 
                                  value="{{ $categorie->id }}" 
                                  {{ (is_array(old('categories')) && in_array($categorie->id, old('categories'))) ? 'selected' : '' }}>
                                  {{ $categorie->nom }}
                              </option>
                          @endforeach
                      </select>

                      @error('categories')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                      @enderror

                      <p class="fs-2 mb-0">
                        Ajouter l'article à une catégorie.
                      </p>
                      
                    </div>
                  

                    <button type="button" class="btn mb-1 bg-primary-subtle text-primary" data-bs-toggle="modal" data-bs-target="#modalAddCategorie">
                      <span class="fs-4 me-1">+</span>
                      Créer une nouvelle catégorie
                    </button>                  


                    <div class="mt-7">
                      <label class="form-label">Sous Categories</label>
                      <select 
                          class="select2 form-control @error('tags') is-invalid @enderror" 
                          multiple="multiple" 
                          name="tags[]">
                          @foreach ($sousCategories as $tag)
                              <option 
                                  value="{{ $tag->id }}" 
                                  {{ (is_array(old('tags')) && in_array($tag->id, old('tags'))) ? 'selected' : '' }}>
                                  {{ $tag->name }}
                              </option>
                          @endforeach
                      </select>

                      @error('tags')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                      @enderror

                     
                      <p class="fs-2 mb-0 mb-3">
                        Ajouter des mots clés à l'article.
                      </p>
                    </div>
                      <button type="button" class="btn mb-1 bg-primary-subtle text-primary" data-bs-toggle="modal" data-bs-target="#modalAddTag">
                        <span class="fs-4 me-1">+</span>
                        Créer d'autres sous catégories
                      </button>   
                  </div>
                </div>

                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                      <label class="form-label">Status</label>

                      <div class="p-2 h-100 bg-success rounded-circle"></div>
                    </div>
                  
                      <div>
                        <select class="form-select mr-sm-2  mb-2" id="inlineFormCustomSelect" name="status">
                          {{-- <option value="" selected disabled>Choisissez un statut</option> <!-- Option vide --> --}}

                          <option value="published" selected>Publié</option>
                          <option value="draft">Brouillon</option>
                          <option value="inactive">Inactif</option>
                        </select>
                        <p class="fs-2 mb-0">
                            Définissez l'état de l'article.
                        </p>
                      </div>
                    
                  </div>
                </div>

                <div class="card">
                  <div class="card-body">
                      <label class="form-label mb-2">Vignette</label>

                      <input type="file" name="couverture" id="couverture" class="dropzone dz-clickable mb-2 w-100" >
                      <p class="fs-2 text-center mb-0 mt-2">
                          Définissez l’image de couverture de l'article. Uniquement les fichiers image d'extensions *.png, *.jpg et *.jpeg sont acceptés.
                      </p>
                  </div>
              </div>
              
              <div class="card">
                  <div class="card-body">
                      <label class="form-label  mb-2">Images</label>

                      <input type="file" name="images[]" id="images" class="dropzone dz-clickable mb-2 w-100" multiple>
                      <p class="fs-2 text-center mb-0 mt-2">
                          Importez les images de l'article. Uniquement les fichiers image d'extensions *.png, *.jpg et *.jpeg sont acceptés.
                      </p>
                  </div>
              </div>
              


              

                
          </div>
      
      <input type="hidden" name="store_id" value="{{ Auth::user()->store_id }}">
                                                  {{-- {{ Auth::user()->name }} --}}
      <div class="form-actions mb-5">
        <button type="submit" class="btn btn-primary">
          Sauvegarder
        </button>
        <button type="button" class="btn bg-danger-subtle text-danger ms-6">
         <a href="{{ route('admin.articles.index') }}">Annuler</a>
        </button>
      </div>

      @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
      @endif
      
    </div>


  <!-- end Basic Area Chart -->

  </form>

  {{-- @forelse ($demos as $article) 
  <p>Image de couverture</p>
  <img src="{{ asset('storage/' . $article->couverture) }}" alt="Couverture">

  @if ($article->images && $article->images->isNotEmpty()) 
      <p>Images de l'article</p>

      @foreach ($article->images as $image) 
          <img src="{{ asset('storage/' . $image->image_path) }}" alt="Image de l'article">
      @endforeach
  @else
      <p>Aucune image disponible pour cet article.</p>
  @endif
@empty
  <p>Rien à afficher</p>
@endforelse --}}





<!-- Modal création des categories d'article -->
<div class="modal fade" id="modalAddCategorie" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header d-flex align-items-center">
        <h4 class="modal-title" id="myLargeModalLabel">
          Ajout de catégorie d'article
        </h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="card">
          
          <div class="card-body">
          

          <form method="POST" action="{{ route('admin.categories.store') }}" enctype="multipart/form-data">
              @csrf
              <div class="row">
                  <div class="col-md-6 mb-3">
                      <label class="form-label" for="categoryName">Nom de la catégorie</label>
                      <input type="text" 
                             class="form-control @error('name_categorie') is-invalid @enderror" 
                             id="categoryName" 
                             name="name_categorie" 
                             placeholder="Nom de la catégorie" 
                             value="{{ old('name_categorie') }}" 
                             required>
                      @error('name_categorie')
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                  </div>

                   <div class="col-md-6 mb-3">
                  
                  <input type="file" name="couverture" id="couverture" class="dropzone dz-clickable mb-2 w-100">
                  <p class="fs-2 text-center mb-0">
                    Définissez la couverture de la catégorie. Uniquement les fichiers image d'extensions *.png, *.jpg et *.jpeg sont acceptés.
                  </p>
                </div>
          
                  
              </div>
          
              <button class="btn btn-primary mt-3" type="submit">Enregistrer</button>
          </form>
          
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn bg-danger-subtle text-danger  waves-effect text-start" data-bs-dismiss="modal">
          Fermer
        </button>
      </div>
    </div>
  </div>

  
  
</div>


<!-- Modal création des tags d'article -->
<div class="modal fade" id="modalAddTag" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header d-flex align-items-center">
        <h4 class="modal-title" id="myLargeModalLabel">
          Ajout de sous categorie d'article
        </h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="card">
          
          <div class="card-body">
          

            <form method="POST" action="{{ route('admin.sousCategories.store') }}" enctype="multipart/form-data">
              @csrf
              <div class="row">
                  <div class="col-md-6 mb-3">
                      <label class="form-label" for="tag_name">Nom de la sous catégorie</label>
                      <input type="text" 
                             class="form-control @error('name') is-invalid @enderror" 
                             id="name" 
                             name="name" 
                             placeholder="Nom de la sous catégorie" 
                             value="{{ old('name') }}" 
                             required>
                      @error('name')
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                  </div>

                  <div class="col-md-6 mb-3">
                  
                    <input type="file" name="image_path" id="image_path" class="dropzone dz-clickable mb-2 w-100">
                    <p class="fs-2 text-center mb-0">
                      Définissez la couverture de la catégorie. Uniquement les fichiers image d'extensions *.png, *.jpg et *.jpeg sont acceptés.
                    </p>
                  </div>

              </div>
          
              <button class="btn btn-primary mt-3" type="submit">Enregistrer</button>
          </form>
          
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn bg-danger-subtle text-danger  waves-effect text-start" data-bs-dismiss="modal">
          Fermer
        </button>
      </div>
    </div>
  </div>

  
  
</div>

  @push('styles')
  <link rel="stylesheet" href="{{asset('assets/backend/libs/quill/dist/quill.snow.css')}}">
  <link rel="stylesheet" href="{{asset('assets/backend/libs/dropzone/dist/min/dropzone.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/backend/libs/select2/dist/css/select2.min.css')}}">
@endpush

@push('scripts')

<!-- solar icons -->
<script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
<script src="{{asset('assets/backend/libs/quill/dist/quill.min.js')}}"></script>
<script src="{{asset('assets/backend/js/forms/quill-init.js')}}"></script>
<script src="{{asset('assets/backend/libs/dropzone/dist/min/dropzone.min.js')}}"></script>
<script src="{{asset('assets/backend/libs/select2/dist/js/select2.full.min.js')}}"></script>
<script src="{{asset('assets/backend/libs/select2/dist/js/select2.min.js')}}"></script>
<script src="{{asset('assets/backend/js/forms/select2.init.js')}}"></script>
<script src="{{asset('assets/backend/libs/jquery.repeater/jquery.repeater.min.js')}}"></script>
<script src="{{asset('assets/backend/libs/jquery-validation/dist/jquery.validate.min.js')}}"></script>
<script src="{{asset('assets/backend/js/forms/repeater-init.js')}}"></script>

<script>

  
  // Lorsque la variation de type est modifiée
  document.addEventListener('DOMContentLoaded', function() {
      const variationTypes = document.querySelectorAll('select[name="variations[][type]"]');

      variationTypes.forEach((select) => {
          select.addEventListener('change', function() {
              const value = this.value;
              const inputField = this.closest('.row').querySelector('select[name="variations[][value]"]');
              
              // Réinitialiser les options
              inputField.innerHTML = '';

              if (value === 'Couleur') {
                  inputField.innerHTML = `
                      <option value="#FF5733">#FF5733 - Rouge</option>
                      <option value="#33FF57">#33FF57 - Vert</option>
                      <option value="#3357FF">#3357FF - Bleu</option>
                      <option value="#F5FF33">#F5FF33 - Jaune</option>
                      <option value="#FF33F1">#FF33F1 - Rose</option>
                      <option value="#33FFF0">#33FFF0 - Aqua</option>
                      <option value="#FF8033">#FF8033 - Orange</option>
                      <option value="#6A33FF">#6A33FF - Violet</option>
                      <option value="#F1F133">#F1F133 - Lime</option>
                      <option value="#FF5733">#FF5733 - Rouge foncé</option>
                  `;
              } else if (value === 'Taille') {
                  inputField.innerHTML = `
                      <option value="S">S</option>
                      <option value="M">M</option>
                      <option value="L">L</option>
                      <option value="XL">XL</option>
                      <option value="XXL">XXL</option>
                      <option value="XXXL">XXXL</option>
                  `;
              } else if (value === 'Poids') {
                  inputField.innerHTML = '<input type="text" name="variations[][value]" class="form-control" placeholder="Poids" required>';
              }
          });
      });
  });
</script>

<script>
  // Affiche/Masque les détails de la promotion selon l'état du toggle
  document.getElementById('is_promotion').addEventListener('change', function () {
      const promotionDetails = document.getElementById('promotion-details');
      promotionDetails.style.display = this.checked ? 'block' : 'none';
  });
</script>
<script>
 


  // Initialiser Quill
// var quill = new Quill('#editor', {
//   theme: 'snow', // Vous pouvez aussi utiliser 'bubble' selon votre choix de thème
//   modules: {
//     toolbar: [
//       [{ 'header': '1' }, { 'header': '2' }, { 'font': [] }],
//       [{ 'list': 'ordered' }, { 'list': 'bullet' }],
//       ['bold', 'italic', 'underline'],
//       ['link'],
//       [{ 'align': [] }],
//       ['image'],
//       ['blockquote'],
//       ['code-block']
//     ]
//   }
// });

// Capture le contenu de Quill dans le champ caché lors de la soumission du formulaire
document.querySelector('form').addEventListener('submit', function(e) {
    const description = quill.root.innerHTML; // Récupérer le contenu HTML de Quill
    document.getElementById('description-field').value = description; // Mettre le contenu dans le champ caché
});

</script>
@endpush

@endsection