<!DOCTYPE html>
<html lang="fr">
    <head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap Min CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
		<!-- Owl Carousel Min CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
		<!-- Owl Theme Default Min CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
		<!-- Remixicon CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/remixicon.css')}}">
		<!-- Meanmenu Min CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/meanmenu.min.css')}}">
		<!-- Style CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
		<!-- Responsive CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">

		<!-- Favicon -->
		<link rel="icon" type="image/png" href="{{asset('assets/images/logo.png')}}">
		<!-- Title -->
		<title>B-TECHLINE</title>

		<!-- SweetAlert2 CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

		<style>
			.camera-container {
    			position: fixed;
				bottom: 80px;
				left: 20px;
				z-index: 99;
			}
			.camera-icon {
				display: block;
				width: 35px;
				height: 35px;
				background: url('{{asset('assets/images/uploadImage.png')}}') no-repeat center center;
				background-size: contain;
				transition: transform 0.3s ease;
			}
			.bounce {
				transform: translateY(-10px);
			}

            .import-image{
                position: absolute;
                top: 12px;
                right: 112px;
            }


            .sticky-footer {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  padding: 0 4rem;
  background: #fff;
}
.sticky-footer > * {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
}
.sticky-footer .cart-dropdown {
  position: relative;
}
.sticky-footer .cart-dropdown .dropdown-box {
  top: auto;
  bottom: 100%;
  right: 0;
  min-width: 34rem;
  padding: 2rem 3rem 3rem;
  margin-bottom: 2.1rem;
  -webkit-transform: translateY(20px);
          transform: translateY(20px);
  -webkit-transition: opacity 0.3s, visibility 0.3s, -webkit-transform 0.3s;
  transition: opacity 0.3s, visibility 0.3s, -webkit-transform 0.3s;
  transition: transform 0.3s, opacity 0.3s, visibility 0.3s;
  transition: transform 0.3s, opacity 0.3s, visibility 0.3s, -webkit-transform 0.3s;
}
.sticky-footer .cart-dropdown:hover .dropdown-box {
  -webkit-transform: translateY(0);
          transform: translateY(0);
  opacity: 1;
  visibility: visible;
}
.sticky-footer .products {
  border: none;
}
.sticky-footer .product-name a {
  padding: 0;
}
.sticky-footer .cart-total {
  padding-top: 1rem;
}

.sticky-link {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  color: #666;
  margin: 1.4rem 0 1.3rem;
}
.sticky-link i, .cart-dropdown .sticky-link i {
  font-size: 2.3rem;
  color: #666;
}
.sticky-link p {
  margin-top: 0.9rem;
  margin-bottom: 0;
  font-size: 1rem;
  line-height: 1;
  letter-spacing: 0.025em;
  text-transform: uppercase;
}
.sticky-link.search-toggle p {
  margin-top: 1rem;
}
.sticky-link:hover {
  color: #2266cc;
}
.sticky-link:hover i {
  color: inherit;
}
            

		</style>

        <style>
          /* Styles de base pour la barre de navigation */
.sticky-footer {
    position: fixed;
    bottom: -100px; /* Caché par défaut */
    left: 0;
    width: 100%;
    background: #fff;
    box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
    display: flex;
    justify-content: space-around;
    align-items: center;
    padding: 10px 0;
    transition: bottom 0.3s ease;
    z-index: 1000;
}

.sticky-footer.visible {
    bottom: 0; /* Afficher la barre de navigation */
}

.sticky-link {
    display: flex;
    flex-direction: column;
    align-items: center;
    color: #666;
    text-decoration: none;
}

.sticky-link i {
    font-size: 1.5rem;
}

.sticky-link p {
    margin-top: 5px;
    font-size: 0.9rem;
}

/* Masquer la barre de navigation sur les écrans larges */
@media (min-width: 769px) {
    .sticky-footer {
        display: none; /* Désactive la barre de navigation sur les grands écrans */
    }
}
        </style>
    </head>

    <body>
		<!-- Start Preloader Area -->
		<div class="preloader">
            <div class="content">
                <div class="box"></div>
            </div>
        </div>
		<!-- End Preloader Area -->

		@include('layouts.header')

        @yield('content')

        @include('layouts.footer')


       

		<div class="go-top">
			<i class="ri-arrow-up-s-fill"></i>
			<i class="ri-arrow-up-s-fill"></i>
		</div>





		<div class="camera-container">
			<button class="eye-btn" style="background-color: transparent !important" data-bs-toggle="modal" data-bs-target="#exampleModal">
				<i class="camera-icon"></i>
			</button>
		</div>

		<div class="modal fade product-view-one" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="cameraModalLabel">Importer votre liste de fourniture</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
					</div>
					<div class="modal-body">
                        <form action="{{ route('searchImage') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="image">Choisir une image</label>
                                <input type="file" name="image" id="image" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Rechercher</button>
                        </form>
					</div>
				</div>
			</div>
		</div>


        

		<!-- Modal-->

            
        <div class="modal fade cart-shit" id="exampleModal-cart" tabindex="-1" aria-hidden="true">
            <div class="cart-shit-wrap">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close-btn" data-bs-dismiss="modal">
                                <i class="ri-close-fill"></i>
                            </button>
                        </div>

                        <div class="modal-body">
                            <ul class="cart-list">
                                @foreach(session('cart', []) as $id => $details)
                                    <li>
                                        <img src="{{ asset('images/articles/' . $details['photo']) }}" style="height: 60px !important; width:60px !important" alt="Image">
                                        
                                        <a href="{{ route('article.details', ['id' => $id]) }}">
                                            {{ $details['name'] }}
                                        </a>
                                    

                                        <span>{{ $details['price'] }} FCFA</span>
                                        <form action="{{ route('cart.destroy', $id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="ri-close-fill"></button>
                                        </form>
                                    </li>
                                @endforeach
                            </ul>
                            
                            <ul class="payable">
                                <li>
                                    Total
                                </li>
                                <li class="total">
                                    <span>{{ array_sum(array_column(session('cart', []), 'price')) }} FCFA</span>
                                </li>
                            </ul>
                            

                            <ul class="cart-check-btn">
                                
                                <li class="checkout">
                                    <a href="#" class="default-btn">
                                        Payer
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal pour les souhaits -->
        <div class="modal fade" id="exampleModal-wishlist" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Mes Souhaits</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        @if(!empty(session('wishlist')) && count(session('wishlist')) > 0)
                        <ul class="wishlist-list">
                            @foreach(session('wishlist') as $id => $details)
                            <li>
                                <img src="{{ asset('images/articles/' . $details['photo']) }}" style="height: 60px !important; width:60px !important" alt="Image">


                                <a href="{{ route('article.details', ['id' => $id]) }}">
                                    {{ $details['name'] }}
                                </a>
                                <span>{{ $details['price'] }} FCFA</span>
                                <form action="{{ route('wishlist.destroy', $id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="ri-close-fill"></button>
                                </form>
                            </li>
                            @endforeach
                        </ul>
                        @else
                        <p>Votre liste de souhaits est vide.</p>
                        @endif
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="sticky-footer" id="sticky-footer">
            <a href="#" class="sticky-link">
                <i class="ri-home-line"></i>
                <p>Accueil</p>
            </a>
            <a href="#" class="sticky-link">
                <i class="ri-store-line"></i>
                <p>Shop</p>
            </a>
            <a href="#" class="sticky-link">
                <i class="ri-user-line"></i>
                <p>Compte</p>
            </a>
            <a href="#" class="sticky-link">
                <i class="ri-search-line"></i>
                <p>Recherche</p>
            </a>
        </div>
		
		<!-- End Go Top Area -->

        <!-- Jquery Min JS -->
		<script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <!-- Bootstrap Bundle Min JS -->
        <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
        <!-- Meanmenu Min JS -->
		<script src="{{asset('assets/js/meanmenu.min.js')}}"></script>
		<!-- Owl Carousel Min JS -->
		<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
		<!-- Range Slider Min JS -->
		<script src="{{asset('assets/js/range-slider.min.js')}}"></script>
		<!-- Form Validator Min JS -->
		<script src="{{asset('assets/js/form-validator.min.js')}}"></script>
		<!-- Contact JS -->
		<script src="{{asset('assets/js/contact-form-script.js')}}"></script>
		<!-- Ajaxchimp Min JS -->
		<script src="{{asset('assets/js/ajaxchimp.min.js')}}"></script>
        <!-- Custom JS -->
		<script src="{{asset('assets/js/custom.js')}}"></script>

		<script>
			document.addEventListener('DOMContentLoaded', function() {
    const cameraIcon = document.querySelector('.camera-icon');

    function bounce() {
        cameraIcon.classList.add('bounce');
        setTimeout(() => {
            cameraIcon.classList.remove('bounce');
        }, 300); // Remove the bounce class after the animation is done
    }

    function bounceThreeTimes() {
        bounce();
        setTimeout(bounce, 600);
        setTimeout(bounce, 1200);
    }

    setInterval(bounceThreeTimes, 4000); // Repeat every 4 seconds
});


		</script>

        <script>
           document.addEventListener('DOMContentLoaded', function() {
    const stickyFooter = document.getElementById('sticky-footer');
    const scrollHeight = 200; // Hauteur de défilement à partir de laquelle la barre de navigation doit apparaître

    window.addEventListener('scroll', function() {
        // Vérifiez si l'écran est en mode mobile (largeur <= 768px)
        if (window.innerWidth <= 768 && window.scrollY > scrollHeight) {
            stickyFooter.classList.add('visible');
        } else {
            stickyFooter.classList.remove('visible');
        }
    });
});
        </script>
    </body>
</html>
