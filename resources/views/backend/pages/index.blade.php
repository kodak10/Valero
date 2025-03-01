@extends('backend.layouts.master')

@section('content')
<div class="page-titles mb-5">
  <div class="row">
    <div class="col-lg-8 col-md-6 col-12 align-self-center">
      <h4 class="text-muted mb-0 fw-normal fs-5">
          <?php
          // Obtenir l'heure actuelle
          $heure = date('H');
          // Déterminer le message
          $salutation = ($heure < 18) ? 'Bonjour' : 'Bonsoir';
          ?>
          <?= $salutation ?>, <strong>{{ Auth::user()->name }}</strong>  <!-- Remplacez par le nom de l'utilisateur connecté -->
      </h4>
      <h2 class="mb-0 fw-bold fs-8">{{ ucfirst(Auth::user()->role) }}</h2> <!-- Remplacez 'role' par le champ correct de votre modèle utilisateur -->
  </div>
  
    
  </div>
</div>
<!-- row -->
<div class="row">

  <!-- Vue Unique quand l'utilisateur est admin -->

    <div class="col-lg-4">
        <div class="card welcome-card2 overflow-hidden bg-primary-subtle border-0">
            <div class="card-body">
                <div class="d-flex align-items-start position-relative">
                    <div>
                        <h4 class="fw-bolder fs-5">Gains</h4>
                        <h2 class="text-primary fs-7">63,438.78 FCFA</h2>
                    </div>
                    <div class="ms-auto">
                        <span class="btn round-48 fs-7 rounded-circle btn-primary d-flex align-items-center justify-content-center">
                            <i class="ti ti-currency-dollar"></i>
                        </span>
                    </div>
                </div>
                <a href="javascript:void(0)" class="btn btn-primary position-relative mt-2">Telecharger</a>
            </div>
        </div>
    </div>

    <div class="col-lg-8">
        <div class="card-group">
          {{-- @foreach ($magasins as $magasin) --}}
            <div class="card">
              <div class="card-body">
                  <span class="btn round-50 fs-6 text-info rounded-circle bg-info-subtle d-flex align-items-center justify-content-center">
                      <i class="ti ti-users"></i>
                  </span>
                  <h3 class="mt-3 pt-1 mb-0 fs-6">
                      39,354
                  </h3>
                  <h6 class="text-muted mb-0 fw-normal"></h6>
              </div>
            </div>
          {{-- @endforeach --}}
            
            
        </div>
    </div>
  <!-- Fin -->


<div class="col-lg-12">
  <div class="card">
      <div class="card-body">
          <h4 class="card-title">Historique des commandes</h4>
          <p class="card-subtitle">Dernières commandes</p>
          <!-- Contenu de l'onglet "Pending" -->
          <div class="table-responsive mt-9">
            <table id="lang_file" class="table w-100 table-striped table-bordered display " >               
              <thead class="thead-dark">
                    <tr>
                        <th scope="col">N°</th>
                        <th scope="col">Image</th>
                        <th scope="col">Article</th>
                        <th scope="col">Prix vendu</th>
                        <th scope="col">Quantité</th>
                        <th scope="col">Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ventes as $index => $vente)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>
                              <img src="{{ asset('storage/' . $vente->article->couverture) }}" alt="Image de l'article" style="width: 50px; height: 50px; object-fit: cover; border-radius: 5px;">

                                {{-- <img src="" alt="Image de l'article" style="width: 50px; height: 50px; object-fit: cover; border-radius: 5px;"> --}}
                            </td>
                            <td>{{ $vente->article->name }}</td>
                            <td>{{ number_format($vente->price, 2) }} FCFA</td>
                            <td>{{ $vente->quantity }}</td>
                            <td>{{ number_format($vente->total, 2) }} FCFA</td>
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
          
         
          
          
          
            
            
            
          </div>
         
      </div>
  </div>
</div>

 
</div>


@endsection

@push('scripts')
<script>
  // Initialisation du Toast de SweetAlert2
  const Toast = Swal.mixin({
      toast: true,
      position: 'top-end', // Positionner en haut à droite
      iconColor: 'white',
      customClass: {
          popup: 'colored-toast',
      },
      showConfirmButton: false,
      timer: 3000,  // L'alerte restera pendant 3 secondes
      timerProgressBar: true,
      didOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer);  // Arrêter le timer au survol
          toast.addEventListener('mouseleave', Swal.resumeTimer);  // Reprendre le timer quand le survol est terminé
      },
  });

  

  
</script>

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
<script src="{{asset('assets/backend/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>

<script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>

<script src="{{asset('assets/backend/js/datatable/datatable-advanced.init.js')}}"></script>

<script>
    function confirmDelete(articleId) {
        // Afficher une boîte de confirmation avant de soumettre le formulaire
        if (confirm("Êtes-vous sûr de vouloir supprimer cet article ?")) {
            // Si l'utilisateur clique sur "OK", soumettre le formulaire
            document.getElementById('delete-form-' + articleId).submit();
        }
    }
</script>
@endpush
@endpush