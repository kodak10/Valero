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
                        <button type="button" id="categoryButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ri-menu-line"></i>
                            TOUTES LES CATEGORIES
                            <i class="arrow-down ri-arrow-down-s-line"></i>
                        </button>

                        <div class="navbar-category-dropdown dropdown-menu" aria-labelledby="categoryButton">
                            <ul>
                                @foreach ($allCategories as $allCategorie)
                                    <li>
                                        <a href="">{{$allCategorie->nom}}</a>
                                    </li>
                                @endforeach
                               
                               
                            </ul>
                        </div>
                    </div>

                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">

                            <li class="nav-item">
                                <a href="/" class="nav-link">Accueil</a>
                            </li>

                            <li class="nav-item">
                                <a href="/article" class="nav-link">Nos Articles</a>
                            </li>

                            {{-- <li class="nav-item">
                                <a href="/administration" class="nav-link">Test Admin</a>
                            </li> --}}




                            {{-- <!-- <li class="nav-item mega-menu">
                                <a href="#" class="nav-link">
                                    Shop
                                    <i class="ri-arrow-down-s-line"></i>
                                </a>

                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <div class="row">
                                            <div class="col">
                                                <h6 class="sub-menu-title">Product Layouts</h6>

                                                <ul class="sub-menu">
                                                    <li>
                                                        <a href="#">Products</a>
                                                    </li>
                                                    <li>
                                                        <a href="best-sellers.html">Best Sellers</a>
                                                    </li>
                                                    <li>
                                                        <a href="featured-#">Featured Products</a>
                                                    </li>
                                                    <li>
                                                        <a href="trending-#">Trending Products</a>
                                                    </li>
                                                    <li>
                                                        <a href="new-arrivals.html">New Arrivals</a>
                                                    </li>
                                                    <li>
                                                        <a href="categories.html">Categories</a>
                                                    </li>
                                                    <li>
                                                        <a href="product-details.html">Product Details</a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="col">
                                                <h6 class="sub-menu-title">Other Pages</h6>

                                                <ul class="sub-menu">
                                                    <li>
                                                        <a href="offer-#">Offer Products</a>
                                                    </li>
                                                    <li>
                                                        <a href="shopping-cart.html">Shopping Cart</a>
                                                    </li>
                                                    <li>
                                                        <a href="checkout.html">Checkout</a>
                                                    </li>
                                                    <li>
                                                        <a href="wishlist.html">Wishlist</a>
                                                    </li>
                                                    <li>
                                                        <a href="my-account.html">My Account</a>
                                                    </li>
                                                    <li>
                                                        <a href="success-order.html">Success Order</a>
                                                    </li>
                                                    <li>
                                                        <a href="order-tracking.html">Order Tracking</a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="col">
                                                <h6 class="sub-menu-title">Admin Page</h6>

                                                <ul class="sub-menu">
                                                    <li>
                                                        <a href="dashboard.html">Dashboard</a>
                                                    </li>
                                                    <li>
                                                        <a href="edit-profile.html">Edit Profile</a>
                                                    </li>
                                                    <li>
                                                        <a href="edit-address.html">Edit Address</a>
                                                    </li>
                                                    <li>
                                                        <a href="order-history.html">Order History</a>
                                                    </li>
                                                    <li>
                                                        <a href="order-details.html">Order Details</a>
                                                    </li>
                                                    <li>
                                                        <a href="address.html">Add Address</a>
                                                    </li>
                                                    <li>
                                                        <a href="password.html">Change Password</a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="col">
                                                <a href="#" class="menu-img">
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li> --> --}}

                            <li class="nav-item">
                                <a href="/contact" class="nav-link">Contact</a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Pages
                                    <i class="ri-arrow-down-s-line"></i>
                                </a>

                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">FAQ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">Politique de confidentialité</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">Termes et conditions</a>
                                    </li>
                                </ul>
                            </li>



                           
                        </ul>

                    </div>
                </nav>
            </div>
        </div>
    </div>

   
    
    <!-- End Navbar Area -->
</header>
<!-- End Header Area -->
