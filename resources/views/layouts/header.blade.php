<header class="header-area">
    
    <!-- Start Middle Header -->
    <div class="middle-header middle-header-style-two">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="logo">
                        <a href="/">
                            <img src="{{asset('assets/images/logo-blue.jpg')}}" alt="Logo" style="height: 100px !important;">
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 ">
                    <form action="{{ route('articles.searchText') }}" method="GET" class="search-box">
                        <input type="text" name="search" placeholder="Rechercher un article" class="form-control" value="{{ request()->input('search') }}">

                        <button type="submit" class="search-btn">
                            <i class="ri-search-line"></i>
                            Valider
                        </button>
                    </form>
                </div>
                        

                <div class="col-lg-3 d-none d-md-block">
                    <ul class="wish-cart d-flex">

                    @auth
                        <li>
                            <a href="{{ route('user.index') }}">
                                <span class="wish-icon">
                                    <i class="ri-dashboard-line"></i>
                                </span>
                                {{-- <span class="favorite">Mon Compte</span> --}}
                                {{-- Menu Général --}}
                            </a>
                        </li>
                    @else
                    <li>
                        <a href="{{ route('register') }}">
                            <span class="wish-icon">
                                <i class="ri-user-add-line"></i>
                            </span>
                            {{-- <span class="favorite">Mon Compte</span> --}}
                            {{-- S'inscrire / Connexion --}}
                        </a>
                    </li>
                    @endauth


                        

                        <li>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal-wishlist">
                                <span class="wish-icon">
                                    <i class="ri-heart-line"></i>
                                    <span class="count">{{ count(session('wishlist', [])) }}</span>
                                </span>
                                {{-- <span class="favorite">Mes Favoris</span> --}}
                                {{-- Mes souhaits --}}
                            </a>
                        </li>
                        <li>
                            <span class="cart" data-bs-toggle="modal" data-bs-target="#exampleModal-cart">
                                <span class="wish-icon">
                                    <i class="ri-shopping-cart-line"></i>
                                    <span class="count">{{ count(session('cart', [])) }}</span>
                                </span>
                                {{-- <span class="favorite">Mon Panier</span> --}}
                                {{-- {{ array_sum(array_column(session('cart', []), 'price')) }} FCFA --}}
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Middle Header -->

    <!-- Start Navbar Area -->
    <div class="navbar-area navbar-area-style-two">
        <div class="mobile-responsive-nav">
            <div class="container">
                <div class="mobile-responsive-menu">
                    <div class="navbar-category">
                        <button type="button" id="categoryButton-1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ri-menu-line"></i>
                        </button>

                        <div class="navbar-category-dropdown dropdown-menu" aria-labelledby="categoryButton">
                            <ul>
                                @foreach ($allCategories as $allCategorie)
                                    <li>
                                        <a href="#">{{$allCategorie->nom}}</a>
                                    </li>
                                @endforeach
                                
                            </ul>
                        </div>
                    </div>
                    <div class="logo">
                        <a href="/">
                            <img src="{{asset('assets/images/logo-white.jpg')}}" alt="logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="desktop-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <div class="navbar-category">
                        <button type="button" id="categoryButton" class="btn btn-primary" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ri-menu-line"></i> TOUTES LES CATÉGORIES <i class="arrow-down ri-arrow-down-s-line"></i>
                        </button>
                
                        <div class="dropdown-menu mega-dropdown p-3" aria-labelledby="categoryButton">
                            <div class="row">
                                @foreach ($categories as $categorie)
                                    <div class="col-md-4">
                                        <h6 class="dropdown-header">{{ $categorie->nom }}</h6>
                                        <ul class="list-unstyled">
                                            @foreach ($categorie->sousCategories as $sousCategorie)
                                                <li>
                                                    <strong>{{ $sousCategorie->nom }}</strong>
                                                    <ul class="list-unstyled ms-3">
                                                        @foreach ($sousCategorie->articles as $article)
                                                            <li><a href="#" class="dropdown-item">{{ $article->titre }}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a href="/" class="nav-link">Accueil</a></li>
                            <li class="nav-item"><a href="/article" class="nav-link">Nos Articles</a></li>
                            <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages <i class="ri-arrow-down-s-line"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" class="dropdown-item">FAQ</a></li>
                                    <li><a href="#" class="dropdown-item">Politique de confidentialité</a></li>
                                    <li><a href="#" class="dropdown-item">Termes et conditions</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
                
                <style>
                    .mega-dropdown {
                        width: 70%;
                        max-width: 1000px;
                        left: 50%;
                        transform: translateX(-50%);
                    }
                    .mega-dropdown .col-md-4 {
                        border-right: 1px solid #ddd;
                        padding: 10px;
                    }
                    .mega-dropdown .col-md-4:last-child {
                        border-right: none;
                    }
                    .mega-dropdown .dropdown-header {
                        font-weight: bold;
                        text-transform: uppercase;
                        color: #007bff;
                    }
                    .mega-dropdown .dropdown-item {
                        font-size: 14px;
                        color: #333;
                    }
                </style>
                
                
               
                
            </div>
        </div>
    </div>

   
    
    <!-- End Navbar Area -->
</header>
<!-- End Header Area -->
