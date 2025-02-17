@extends('layouts.app')
@section('content')

<div class="container">
    <span>les categories</span>
</div>
<!-- Start Hero Slider Area -->
<section class="hero-slider-area hero-slider-area-style-two">
    <div class="hero-slider-two owl-carousel owl-theme">
        <div class="slider-item bg-4">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="hero-slider-content">
                            <h1>Bienvenue chez B-TECHLINE</h1>
                            <p>Votre destination unique pour toutes vos fournitures scolaires.
                                Des produits de qualité à des prix imbattables.
                                Préparez-vous pour une année scolaire réussie avec nous !
                            </p>

                            <div class="hero-slider-btn">
                                <a href="/article" class="default-btn">
                                    <i class="ri-shopping-cart-line"></i>
                                    Commander
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item bg-5">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="hero-slider-content">
                            <h1 style="color: #f1f1f1">Produits en Vedette
                            </h1>
                            <p style="color: #f1f1f1">
                                Découvrez notre sélection des fournitures scolaires les plus populaires et innovantes.
                                Des outils de qualité pour chaque étudiant, du primaire à l'université.
                                Commandez maintenant et profitez de nos offres spéciales !
                            </p>

                            <div class="banner-btn">
                                <a href="/article" class="default-btn">
                                    <i class="ri-shopping-cart-line"></i>
                                    Commander
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item bg-6">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="hero-slider-content">
                            <h1 style="color: #f1f1f1 ">Des articles de Seconde Main
                            </h1>
                            <p style="color: #f1f1f1">Des fournitures scolaires de qualité à des prix réduits.
                                Faites des économies tout en préservant l'environnement.
                                Découvrez notre sélection d'articles d'occasion soigneusement vérifiés.</p>

                            <div class="banner-btn">
                                <a href="/article" class="default-btn">
                                    <i class="ri-shopping-cart-line"></i>
                                    Commander
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Hero Slider Area -->

<section class="popular-categories-area pt-54 pb-30">
    <div class="container">
     
        <div class="row justify-content-center">
            <h5>Les catégories du moment</h5>
            @foreach ($categories as $categorie )

            <div class="col-lg-2 col-sm-6 col-md-4">
                <div class="single-popular-categories">
                    <a href="{{ route('articles.filter', ['categorie_id' => $categorie->id]) }}">
                        <img src="{{ asset('storage/' . $categorie->couverture) }}" alt="Image">
                        <span>{{$categorie->nom}}</span> 
                    </a>
                </div>
            </div>
            @endforeach

           
           
        </div>
    </div>
</section>

<!-- Start Featured Products Area -->
<section class="featured-products-area pb-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="featured-product-img bg-2">
                    <div class="featured-product-content">
                        <span class="best">Bon Plan</span>
                        <h3>Ensembles d'outils haut de gamme et seconde mains</h3>
                        <span class="offer">Jusqu'à 30% de réduction</span>
                        <a href="/article">
                            Commander
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-9">
                <div class="section-title">
                    <h2>Articles Populaires</h2>
                </div>

                <div class="featured-product-wrap">
                    <div class="featured-product-slider owl-carousel owl-theme">
                        @foreach ($articles as $article)
                        <div class="single-products">
                            <div class="product-img">
                                <a href="{{ route('article.details', ['id' => $article->id]) }}">
                                                        <img src="{{ asset('storage/' . $article->couverture) }}" style="height: 150px !important" alt="Image">
                                </a>
                            </div>
                    
                            <div class="product-content">
                                <a href="{{ route('article.details', ['id' => $article->id]) }}" class="title">
                                    {{$article->name}}
                                </a>
                    
                                <ul class="products-rating">
                                    @php
                                        $averageRating = $article->averageRating();
                                    @endphp
                                    @for ($i = 1; $i <= 5; $i++)
                                        <li>
                                            <i class="ri-star-fill {{ $i <= $averageRating ? 'text-warning' : 'text-muted' }}"></i>
                                        </li>
                                    @endfor
                                    <li>
                                        <a href="{{ route('article.details', ['id' => $article->id]) }}">
                                            ({{ $article->reviewsCount() }} {{ Str::plural('avis', $article->reviewsCount()) }})
                                        </a>
                                    </li>
                                </ul>
                    
                                <ul class="products-price">
                                    <li>{{$article->price}}</li> FCFA
                                </ul>
                    
                                <ul class="products-cart-wish-view d-flex justify-content-between">
                                    <li>
                                        <form action="{{ route('cart.store') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="article_id" value="{{ $article->id }}">
                                            <button type="submit" class="default-btn">
                                                <i class="ri-shopping-cart-line"></i>
                                                Ajouter au panier
                                            </button>
                                        </form>
                                    </li>
                                    <li>
                                        <form action="{{ route('wishlist.store') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="article_id" value="{{ $article->id }}">
                                            <button type="submit" class="wish-btn">
                                                <i class="ri-heart-line"></i>
                                            </button>
                                        </form>
                                    </li>
                                    <li>
                                        <button class="eye-btn">
                                            <a href="{{ route('article.details', ['id' => $article->id]) }}">
                                                <i class="ri-eye-line"></i>
                                            </a>
                                            
                                            
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Featured Products Area -->

<!-- Start New Arrivals Area -->
<section class="new-arrivals-area pb-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="section-title">
                    <h2>Tendances</h2>
                </div>

                {{-- <ul class="trending-product-list">
                   @foreach ($trendingArticles as $trendingArticle)
                   <li class="single-list">
                    <img src="{{ asset('images/articles/' . $trendingArticle->couverture) }}" style="height: 100px !important" alt="Image">
                    

                    <div class="product-content">
                        <a href="{{ route('article.details', ['id' => $trendingArticle->id]) }}" class="title">
                           {{$trendingArticle->nom}}
                        </a>

                        <ul class="products-price">
                            <li>
                                {{$trendingArticle->prix}} FCFA
                                
                            </li>
                        </ul>

                        <ul class="products-rating">
                            @php
                                $averageRating = $trendingArticle->averageRating();
                            @endphp
                            @for ($i = 1; $i <= 5; $i++)
                                <li>
                                    <i class="ri-star-fill {{ $i <= $averageRating ? 'text-warning' : 'text-muted' }}"></i>
                                </li>
                            @endfor
                            <li>
                                <a href="{{ route('article.details', ['id' => $trendingArticle->id]) }}">
                                    ({{ $trendingArticle->reviewsCount() }} {{ Str::plural('avis', $trendingArticle->reviewsCount()) }})
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                   @endforeach

                    
                </ul> --}}
            </div>

            <div class="col-lg-9">
                <div class="section-title">
                    <h2>Articles disponibles</h2>

                    <a href="/article" class="read-more">
                        Voir tout
                    </a>
                </div>

                <div class="row">
                    @foreach ($articles as $article )
                        <div class="col-xl-3 col-sm-6">
                            <div class="single-products new-arrivals">
                                <div class="product-img">
                                    <a href="{{ route('article.details', ['id' => $article->id]) }}">
                                        <img src="{{ asset('storage/' . $article->couverture) }}" style="height: 150px !important" alt="Image">
                                    </a>

                                </div>

                                <div class="product-content">
                                    <a href="{{ route('article.details', ['id' => $article->id]) }}" class="title">
                                        {{$article->name}}
                                    </a>

                                    {{-- <ul class="products-rating">
                                        @php
                                            $averageRating = $trendingArticle->averageRating();
                                        @endphp
                                        @for ($i = 1; $i <= 5; $i++)
                                            <li>
                                                <i class="ri-star-fill {{ $i <= $averageRating ? 'text-warning' : 'text-muted' }}"></i>
                                            </li>
                                        @endfor
                                        <li>
                                            <a href="{{ route('article.details', ['id' => $trendingArticle->id]) }}">
                                                ({{ $trendingArticle->reviewsCount() }} {{ Str::plural('avis', $trendingArticle->reviewsCount()) }})
                                            </a>
                                        </li>
                                    </ul> --}}

                                    <ul class="products-price">
                                        <li>
                                           {{$article->price}} FCFA
                                        </li>
                                    </ul>

                                    <ul class="products-cart-wish-view d-flex justify-content-between">
                                        <li>
                                            <form action="{{ route('cart.store') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="article_id" value="{{ $article->id }}">
                                                <button type="submit" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Ajouter au panier
                                                </button>
                                            </form>
                                        </li>
                                        <li>
                                            <form action="{{ route('wishlist.store') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="article_id" value="{{ $article->id }}">
                                                <button type="submit" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </button>
                                            </form>
                                        </li>
                                        <li>
                                            <button class="eye-btn">
                                                <a href="{{ route('article.details', ['id' => $article->id]) }}">
                                                    <i class="ri-eye-line"></i>
                                                </a>
                                                
                                                
                                            </button>
                                        </li>

                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End New Arrivals Area -->

<!-- Start Best sellers Area -->
<section class="best-seller-area pb-30">
    <div class="container">

        <div class="section-title">
            <h2>Meilleurs Ventes</h2>
        </div>

        <div class="best-product-slider owl-carousel owl-theme">
            @foreach ($articles as $article)
            <div class="single-products">
                <div class="product-img">
                    <a href="{{ route('article.details', ['id' => $article->id]) }}">
                                            <img src="{{ asset('storage/' . $article->couverture) }}" style="height: 150px !important" alt="Image">
                    </a>
                </div>

                <div class="product-content">
                    <a href="{{ route('article.details', ['id' => $article->id]) }}" class="title">
                        {{$article->name}}
                    </a>

                    {{-- <ul class="products-rating">
                        @php
                            $averageRating = $trendingArticle->averageRating();
                        @endphp
                        @for ($i = 1; $i <= 5; $i++)
                            <li>
                                <i class="ri-star-fill {{ $i <= $averageRating ? 'text-warning' : 'text-muted' }}"></i>
                            </li>
                        @endfor
                        <li>
                            <a href="{{ route('article.details', ['id' => $trendingArticle->id]) }}">
                                ({{ $trendingArticle->reviewsCount() }} {{ Str::plural('avis', $trendingArticle->reviewsCount()) }})
                            </a>
                        </li>
                    </ul> --}}

                    <ul class="products-price">
                        <li>
                            {{$article->price}} FCFA
                        </li>
                    </ul>

                    <ul class="products-cart-wish-view d-flex justify-content-between">
                        <li>
                            <form action="{{ route('cart.store') }}" method="POST">
                                @csrf
                                <input type="hidden" name="article_id" value="{{ $article->id }}">
                                <button type="submit" class="default-btn">
                                    <i class="ri-shopping-cart-line"></i>
                                    Ajouter au panier
                                </button>
                            </form>
                        </li>
                        <li>
                            <form action="{{ route('wishlist.store') }}" method="POST">
                                @csrf
                                <input type="hidden" name="article_id" value="{{ $article->id }}">
                                <button type="submit" class="wish-btn">
                                    <i class="ri-heart-line"></i>
                                </button>
                            </form>
                        </li>
                        <li>
                            <button class="eye-btn">
                                <a href="{{ route('article.details', ['id' => $article->id]) }}">
                                    <i class="ri-eye-line"></i>
                                </a>
                                
                                
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
            @endforeach
           

           
        </div>
    </div>
</section>
<!-- End Best sellers Area -->

<!-- Start Sale Offer Area -->
<section class="sale-offer-area">
    <div class="container">
        <div class="sale-offer-bg bg-2">
            {{-- <h5 style="color: #f1f1f1">Sale offer - <span>30% off</span></h5> --}}
            <h3 style="color: #f1f1f1">Tous les articles pour différentes classes</h3>
            <a href="/article" class="default-btn">
                <i class="ri-shopping-cart-line"></i>
                Commander
            </a>
        </div>
    </div>
</section>
<!-- End Sale Offer Area -->

<!-- Start Flash Deals Area -->
<section class="flash-deals-area ptb-54">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="section-title p-0">
                    <h2>Commentaire client</h2>
                </div>

                <div class="customer-slider owl-carousel owl-theme">
                    <div class="single-customer">
                        <div class="avatar">
                            <img src="assets/images/customer/customer-1.png" class="customer" alt="Image">
                            <img src="assets/images/customer/quote.png" class="quote" alt="Image">

                            <div class="avatar-name">
                                <h3>Georgia Cargill</h3>
                                <span>Finance Officer</span>
                            </div>
                        </div>

                        <p>"Vivamus suscipit tortor eget felis porttitor volutpat. Nulla porttitor accumsan tincidunt. Lorem ipsum dolor sit amet, consectetur elit. Donec sollicitudin molestie eget malesuada accumsan sit amet, consectetur."</p>
                    </div>

                    <div class="single-customer">
                        <div class="avatar">
                            <img src="assets/images/customer/customer-2.png" class="customer" alt="Image">
                            <img src="assets/images/customer/quote.png" class="quote" alt="Image">

                            <div class="avatar-name">
                                <h3>Alex Dew</h3>
                                <span>Finance Marketer</span>
                            </div>
                        </div>

                        <p>"Vivamus suscipit tortor eget felis porttitor volutpat. Nulla porttitor accumsan tincidunt. Lorem ipsum dolor sit amet, consectetur elit. Donec sollicitudin molestie eget malesuada accumsan sit amet, consectetur."</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-9">
                <div class="section-title">
                    <h2>Ventes flash</h2>
                </div>
            
                <div class="flash-deals-wrap need-border">
                    <div class="flash-deals-slider owl-carousel owl-theme">
                        @foreach($flashSales as $flashSale)
                            <div class="single-products deals-products">
                                <div class="row align-items-center">
                                    <div class="col-xl-6">
                                        <div class="product-img">
                                            <a href="{{ route('article.details', ['id' => $flashSale->article->id]) }}">
                                                <img src="{{ asset('storage/' . $flashSale->article->image) }}" alt="Image">
                                            </a>
                                        </div>
                                    </div>
            
                                    <div class="col-xl-6">
                                        <div class="product-content">
                                            <a href="{{ route('article.details', ['id' => $flashSale->article->id]) }}" class="title">
                                                {{ $flashSale->article->name }}
                                            </a>
            
                                            {{-- <ul class="products-rating">
                                                @php
                                                    $averageRating = $trendingArticle->averageRating();
                                                @endphp
                                                @for ($i = 1; $i <= 5; $i++)
                                                    <li>
                                                        <i class="ri-star-fill {{ $i <= $averageRating ? 'text-warning' : 'text-muted' }}"></i>
                                                    </li>
                                                @endfor
                                                <li>
                                                    <a href="{{ route('article.details', ['id' => $trendingArticle->id]) }}">
                                                        ({{ $trendingArticle->reviewsCount() }} {{ Str::plural('avis', $trendingArticle->reviewsCount()) }})
                                                    </a>
                                                </li>
                                            </ul> --}}
            
                                            <ul class="products-price">
                                                <li>{{ $flashSale->discount_price }} FCFA<del>{{ $flashSale->article->price }} FCFA</del></li>
                                            </ul>
            
                                            <div id="timer">
                                                <div id="days"></div>
                                                <div id="hours"></div>
                                                <div id="minutes"></div>
                                                <div id="seconds"></div>
                                            </div>
            
                                            <ul class="products-cart-wish-view">
                                                
                                                <li>
                                                    <form action="{{ route('cart.store') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="article_id" value="{{ $article->id }}">
                                                        <button type="submit" class="default-btn">
                                                            <i class="ri-shopping-cart-line"></i>
                                                            Ajouter au panier
                                                        </button>
                                                    </form>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Flash Deals Area -->

<!-- Start Sale Discount Area -->
<section class="sale-discount-area pb-54">
    <div class="container">
        <div class="sale-discount-bg">
            <div class="discount-content">
                {{-- <h5>Get Discount 30% Off</h5> --}}
                <h3 style="color: #2a3f5a">Nouveaux prix plus bas sur des centaines d'articles de qualité supérieure</h3>
            </div>
        </div>
    </div>
</section>
<!-- End Sale Discount Area -->

<!-- Start Categories Area -->
<section class="categories-area pb-54">
    <div class="container">
        <div class="categories-wrap tab products-details-tab">
            <div class="row">
                <div class="col-lg-3">
                    <div class="section-title">
                        <h2>Les Secondes Mains</h2>
                    </div>

                    <ul class="tabs">
                        @foreach ($categories as $categorie)
                        <li class="tab-link" data-tab="tab-{{ $categorie->id }}">
                            {{ $categorie->nom }}
                        </li>
                        @endforeach
                    </ul>
        

                    
                </div>

                <div class="col-lg-9">
                    <div class="tab_content">
                        @foreach ($categories as $categorie)
                        <div id="tab-{{ $categorie->id }}" class="tabs_item">
                            <div class="categories-slider owl-carousel owl-theme">
                                @foreach ($articlesSecondMains as $article)
                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="{{ route('article.details', ['id' => $article->id]) }}">
                                            <img src="{{ asset('images/articles/' . $article->couverture) }}" style="height: 150px !important" alt="Image">
                                        </a>
                                    </div>
        
                                    <div class="product-content">
                                        <a href="{{ route('article.details', ['id' => $article->id]) }}" class="title">
                                            {{ $article->nom }}
                                        </a>
        
                                        <ul class="products-rating">
                                            @for ($i = 0; $i < 5; $i++)
                                                <li>
                                                    <i class="ri-star-fill"></i>
                                                </li>
                                            @endfor
                                            <li>
                                                <a href="#">
                                                    ({{ $article->reviews_count }} Review)
                                                </a>
                                            </li>
                                        </ul>
        
                                        <ul class="products-price">
                                            <li>
                                                {{ $article->prix }} FCFA
                                                @if($article->old_price)
                                                    <del>{{ $article->old_price }} FCFA</del>
                                                @endif
                                            </li>
                                        </ul>
        
                                        <ul class="products-cart-wish-view d-flex justify-content-between">
                                            <li>
                                                <form action="{{ route('cart.store') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="article_id" value="{{ $article->id }}">
                                                    <button type="submit" class="default-btn">
                                                        <i class="ri-shopping-cart-line"></i>
                                                        Ajouter au panier
                                                    </button>
                                                </form>
                                            </li>
                                            <li>
                                                <form action="{{ route('wishlist.store') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="article_id" value="{{ $article->id }}">
                                                    <button type="submit" class="wish-btn">
                                                        <i class="ri-heart-line"></i>
                                                    </button>
                                                </form>
                                            </li>
                                            <li>
                                                

                                                <button class="eye-btn">
                                                    <a href="{{ route('article.details', ['id' => $article->id]) }}">
                                                        <i class="ri-eye-line"></i>
                                                    </a>
                                                    
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Categories Area -->

<!-- Start Our Blog Area -->
<!-- <section class="our-blog-area pb-30">
    <div class="container">
        <div class="section-title">
            <h2>Our Blog Posts</h2>
            <a href="blog.html" class="read-more">
                View All
            </a>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="single-blog">
                    <a href="blog-details.html">
                        <img src="assets/images/blog/blog-1.jpg" alt="Image">
                    </a>

                    <div class="blog-content">
                        <ul>
                            <li>
                                <a href="author.html">
                                    Admin
                                </a>
                            </li>
                            <li>
                                July 30, 2024
                            </li>
                            <li>
                                <a href="blog-details.html">
                                    (03) Comments
                                </a>
                            </li>
                        </ul>

                        <h3>
                            <a href="blog-details.html">
                                Powerful Motor For The Best Performance In Compound Miter Saw
                            </a>
                        </h3>

                        <a href="blog-details.html" class="default-btn">
                            Read More
                            <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-blog">
                    <a href="blog-details.html">
                        <img src="assets/images/blog/blog-2.jpg" alt="Image">
                    </a>

                    <div class="blog-content">
                        <ul>
                            <li>
                                <a href="author.html">
                                    Admin
                                </a>
                            </li>
                            <li>
                                July 05, 2024
                            </li>
                            <li>
                                <a href="blog-details.html">
                                    (03) Comments
                                </a>
                            </li>
                        </ul>

                        <h3>
                            <a href="blog-details.html">
                                Why We Used One Of The Best Corded Drill Power Tools
                            </a>
                        </h3>

                        <a href="blog-details.html" class="default-btn">
                            Read More
                            <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-blog">
                    <a href="blog-details.html">
                        <img src="assets/images/blog/blog-3.jpg" alt="Image">
                    </a>

                    <div class="blog-content">
                        <ul>
                            <li>
                                <a href="author.html">
                                    Admin
                                </a>
                            </li>
                            <li>
                                July 15, 2024
                            </li>
                            <li>
                                <a href="blog-details.html">
                                    (03) Comments
                                </a>
                            </li>
                        </ul>

                        <h3>
                            <a href="blog-details.html">
                                The Most Advanced Quality Tools For Welding Work
                            </a>
                        </h3>

                        <a href="blog-details.html" class="default-btn">
                            Read More
                            <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- End Our Blog Area -->

<!-- Start Partner Area -->
{{-- <div class="partner-area pb-54">
    <div class="container">
        <div class="partner-wrap">
            <div class="partner-slider owl-carousel owl-theme">
                <div class="partner-item">
                    <img src="assets/images/partners/partner-1.png" alt="Image">
                </div>
                <div class="partner-item">
                    <img src="assets/images/partners/partner-2.png" alt="Image">
                </div>
                <div class="partner-item">
                    <img src="assets/images/partners/partner-3.png" alt="Image">
                </div>
                <div class="partner-item">
                    <img src="assets/images/partners/partner-4.png" alt="Image">
                </div>
                <div class="partner-item">
                    <img src="assets/images/partners/partner-5.png" alt="Image">
                </div>
                <div class="partner-item">
                    <img src="assets/images/partners/partner-6.png" alt="Image">
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- End Partner Area -->

{{-- <!-- Start Special Area -->
<section class="special-area pb-30">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="section-title">
                    <h2>Special Offers</h2>
                </div>

                <ul class="trending-product-list special-product-list">
                    <li class="single-list">
                        <img src="assets/images/products/product-31.jpg" alt="Image">

                        <div class="product-content">
                            <a href="#" class="title">
                                White Whale Vacuum Cleaner High Quality Product
                            </a>

                            <ul class="products-price">
                                <li>
                                    $129.00
                                    <del>$150.00</del>
                                </li>
                            </ul>

                            <ul class="products-rating">
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="single-list">
                        <img src="assets/images/products/product-32.jpg" alt="Image">

                        <div class="product-content">
                            <a href="#" class="title">
                                Professional Cordless Drill Power Tools Set Competitive Price
                            </a>

                            <ul class="products-price">
                                <li>
                                    $90.00
                                    <del>$150.00</del>
                                </li>
                            </ul>

                            <ul class="products-rating">
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="single-list">
                        <img src="assets/images/products/product-33.jpg" alt="Image">

                        <div class="product-content">
                            <a href="#" class="title">
                                Power Tools Set Chinese Manufacturer Production 50V Lithu Battery
                            </a>

                            <ul class="products-price">
                                <li>
                                    $29.00
                                    <del>$50.00</del>
                                </li>
                            </ul>

                            <ul class="products-rating">
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="section-title">
                    <h2>Popular Products</h2>
                </div>

                <ul class="trending-product-list special-product-list">
                    <li class="single-list">
                        <img src="assets/images/products/product-34.jpg" alt="Image">

                        <div class="product-content">
                            <a href="#" class="title">
                                Grinding Machine Polisher Household 5 Inch Mini Portable Power Tools
                            </a>

                            <ul class="products-price">
                                <li>
                                    $119.00
                                    <del>$150.00</del>
                                </li>
                            </ul>

                            <ul class="products-rating">
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="single-list">
                        <img src="assets/images/products/product-35.jpg" alt="Image">

                        <div class="product-content">
                            <a href="#" class="title">
                                Professional 2000W 25mm Electric Jack Hammer Drill
                            </a>

                            <ul class="products-price">
                                <li>
                                    $200.00
                                    <del>$250.00</del>
                                </li>
                            </ul>

                            <ul class="products-rating">
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="single-list">
                        <img src="assets/images/products/product-36.jpg" alt="Image">

                        <div class="product-content">
                            <a href="#" class="title">
                                Electrical Magnetic Impact Power Hammer Drills Machine
                            </a>

                            <ul class="products-price">
                                <li>
                                    $170.00
                                    <del>$220.00</del>
                                </li>
                            </ul>

                            <ul class="products-rating">
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="section-title">
                    <h2>Top Rated Products</h2>
                </div>

                <ul class="trending-product-list special-product-list">
                    <li class="single-list">
                        <img src="assets/images/products/product-37.jpg" alt="Image">

                        <div class="product-content">
                            <a href="#" class="title">
                                High Quality Industrial Stapler Powerful Heavy Duty Metal
                            </a>

                            <ul class="products-price">
                                <li>
                                    $59.00
                                    <del>$120.00</del>
                                </li>
                            </ul>

                            <ul class="products-rating">
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="single-list">
                        <img src="assets/images/products/product-38.jpg" alt="Image">

                        <div class="product-content">
                            <a href="#" class="title">
                                High Quality Carbon Steel Professional Power Tools
                            </a>

                            <ul class="products-price">
                                <li>
                                    $99.00
                                    <del>$130.00</del>
                                </li>
                            </ul>

                            <ul class="products-rating">
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="single-list">
                        <img src="assets/images/products/product-39.jpg" alt="Image">

                        <div class="product-content">
                            <a href="#" class="title">
                                DFMALB 20V Max XX Oscillating Multi Variable Speed Tool
                            </a>

                            <ul class="products-price">
                                <li>
                                    $125.00
                                    <del>$200.00</del>
                                </li>
                            </ul>

                            <ul class="products-rating">
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- End Special Area --> --}}

<!-- Start Services Area -->
<section class="services-area pt-0 pb-30">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-sm-6">
                <div class="single-services">
                    <div class="icon">
                        <img src="assets/images/icon/support.png" alt="Image">
                    </div>
                    <h3>Service clientt</h3>
                    <p>24h/24 et 7j/7</p>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="single-services">
                    <div class="icon">
                        <img src="assets/images/icon/payment.png" alt="Image">
                    </div>
                    <h3>Paiements sécurisés</h3>
                    <p>Payez avec les moyens de payement mobile monney ou cash.</p>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="single-services">
                    <div class="icon">
                        <img src="assets/images/icon/network.png" alt="Image">
                    </div>
                    <h3>Livraison</h3>
                    <p>Nous livrons où vous voulez.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Services Area -->


		@include('layouts.footer_importer_image')

        <!-- Start Product View One Area -->
        {{-- <div class="modal fade product-view-one" id="exampleModal">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <button type="button" class="close" data-bs-dismiss="modal">
                        <span aria-hidden="true">
							<i class="ri-close-line"></i>
						</span>
					</button>

                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="product-view-one-image">
								<div id="big" class="owl-carousel owl-theme">
									<div class="item">
										<img src="assets/images/products/product-1.jpg" alt="Image">
									</div>

									<div class="item">
										<img src="assets/images/products/product-2.jpg" alt="Image">
									</div>

									<div class="item">
										<img src="assets/images/products/product-3.jpg" alt="Image">
									</div>

									<div class="item">
										<img src="assets/images/products/product-4.jpg" alt="Image">
									</div>

									<div class="item">
										<img src="assets/images/products/product-5.jpg" alt="Image">
									</div>

									<div class="item">
										<img src="{{ asset('images/articles/' . $article->couverture) }}" alt="Image">
									</div>
								</div>

								<div id="thumbs" class="owl-carousel owl-theme">
									<div class="item">
										<img src="assets/images/products/product-1.jpg" alt="Image">
									</div>

									<div class="item">
										<img src="assets/images/products/product-2.jpg" alt="Image">
									</div>

									<div class="item">
										<img src="assets/images/products/product-3.jpg" alt="Image">
									</div>

									<div class="item">
										<img src="assets/images/products/product-4.jpg" alt="Image">
									</div>

									<div class="item">
										<img src="assets/images/products/product-5.jpg" alt="Image">
									</div>

									<div class="item">
										<img src="{{ asset('images/articles/' . $article->couverture) }}" alt="Image">
									</div>
								</div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="product-content">
                                <h3>
									Cordless Drill Professional Combo Drill And Screwdriver
								</h3>

								<div class="product-review">
                                    <div class="rating">
										<i class="ri-star-fill"></i>
										<i class="ri-star-fill"></i>
										<i class="ri-star-fill"></i>
										<i class="ri-star-fill"></i>
										<i class="ri-star-fill"></i>
                                    </div>
                                    <a href="#" class="rating-count">4 Reviews</a>
								</div>

                                <div class="price">
									<span class="new-price">$119.0 <del>$219.0</del></span>
									<span class="in-stock">In Stock (8 Items)</span>
								</div>

                                <ul class="product-info">
                                    <li>
										<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At magnam ad reprehenderit fuga nam, non odit necessitatibus facilis beatae temporibus</p>
									</li>
                                    <li>
										<span>SKU:</span>
										001
									</li>
                                    <li>
										<span>Availability:</span>
										Available
									</li>
                                    <li>
										<span>Brand:</span>
										Ehay
									</li>
                                    <li>
										<span>Categories:</span>
										<a href="#">Power Drill</a>
									</li>
								</ul>

								<div class="product-color-switch">

								   	<ul>
										<li>
											<span>Color:</span>
										</li>
										<li>
											<button title="Black" class="color-black"></button>
										</li>
										<li>
											<button title="White" class="color-white"></button>
										</li>
										<li class="active">
											<button title="Green" class="color-green"></button>
										</li>
										<li>
											<button title="Yellow Green" class="color-yellowgreen"></button>
										</li>
										<li>
											<button title="Teal" class="color-teal"></button>
										</li>
								   	</ul>
								</div>

                                <div class="product-add-to-cart">
                                    <div class="input-counter">
										<span class="minus-btn">
											<i class="ri-subtract-line"></i>
										</span>

										<input type="text" value="1">

										<span class="plus-btn">
											<i class="ri-add-line"></i>
										</span>
									</div>

									<a href="#" class="default-btn">
										<i class="ri-shopping-cart-line"></i>
										Add To Cart
									</a>
								</div>

								<div class="wishlist-btn">
									<a href="#" class="default-btn">
										<i class="ri-heart-line"></i>
										Wishlist
									</a>
								</div>

								<div class="share-this-product">
									<ul>
										<li>
											<span>Partager</span>
										</li>
										<li>
											<a href="https://www.facebook.com/" target="_blank">
												<i class="ri-facebook-fill"></i>
											</a>
										</li>
										<li>
											<a href="https://www.instagram.com/" target="_blank">
												<i class="ri-instagram-line"></i>
											</a>
										</li>
										<li>
											<a href="https://www.linkedin.com/" target="_blank">
												<i class="ri-linkedin-fill"></i>
											</a>
										</li>
										<li>
											<a href="https://twitter.com/" target="_blank">
												<i class="ri-twitter-fill"></i>
											</a>
										</li>
									</ul>
								</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            
        
            @foreach ($articlesSecondMains as $article)
            <!-- Modal pour les détails du produit -->
            <div class="modal fade product-view-one" id="exampleModal{{ $article->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <button type="button" class="close" data-bs-dismiss="modal">
                            <span aria-hidden="true">
                                <i class="ri-close-line"></i>
                            </span>
                        </button>
            
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="product-view-one-image">
                                    <!-- Placez ici votre carousel ou vos images de produits -->
                                                        <img src="{{ asset('images/articles/' . $article->couverture) }}" style="height: 150px !important" alt="Image">
                                </div>
                            </div>
            
                            <div class="col-lg-6">
                                <div class="product-content">
                                    <h3>{{ $article->nom }}</h3>
            
                                    <!-- Ajoutez ici le reste des détails du produit comme la description, le prix, etc. -->
                                    <div class="product-review">
                                        <div class="rating">
                                            @for ($i = 0; $i < 5; $i++)
                                                <i class="ri-star-fill"></i>
                                            @endfor
                                        </div>
                                        <a href="#" class="rating-count">{{ $article->reviews_count }} Reviews</a>
                                    </div>
            
                                    <div class="price">
                                        <span class="new-price">{{ $article->price }} FCFA</span>
                                        @if($article->old_price)
                                            <del>{{ $article->old_price }} FCFA</del>
                                        @endif
                                        {{-- <span class="in-stock">In Stock (8 Items)</span> --}}
                                    </div>
            
                                    <!-- Ajoutez d'autres informations sur le produit ici -->
            
                                    <div class="product-add-to-cart">
                                        <div class="input-counter">
                                            <span class="minus-btn">
                                                <i class="ri-subtract-line"></i>
                                            </span>
                                            <input type="text" value="1">
                                            <span class="plus-btn">
                                                <i class="ri-add-line"></i>
                                            </span>
                                        </div>
            
                                        <a href="#" class="default-btn">
                                            <i class="ri-shopping-cart-line"></i>
                                            Ajouter au panier
                                        </a>
                                    </div>
            
                                    <div class="wishlist-btn">
                                        <a href="#" class="default-btn">
                                            <i class="ri-heart-line"></i>
                                            Ajouter aux favoris
                                        </a>
                                    </div>
            
                                    <div class="share-this-product">
                                        <ul>
                                            <li><span>Partager</span></li>
                                            <li><a href="https://www.facebook.com/" target="_blank"><i class="ri-facebook-fill"></i></a></li>
                                            <li><a href="https://www.instagram.com/" target="_blank"><i class="ri-instagram-line"></i></a></li>
                                            <li><a href="https://www.linkedin.com/" target="_blank"><i class="ri-linkedin-fill"></i></a></li>
                                            <li><a href="https://twitter.com/" target="_blank"><i class="ri-twitter-fill"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach


            

            
@endsection

@section('scripts')

<script>
    $(document).ready(function(){
        $('.tabs li').click(function(){
            var tab_id = $(this).attr('data-tab');

            $('.tabs li').removeClass('current');
            $('.tabs_item').removeClass('current');

            $(this).addClass('current');
            $("#"+tab_id).addClass('current');
        });

        $('.categories-slider').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        });
    });
</script>

<style>
    .tabs li.current {
        background: #f1f1f1;
        color: #000;
    }

    .tabs_item {
        display: none;
    }

    .tabs_item.current {
        display: block;
    }
</style>

<!-- jQuery -->
</script><script src="assets/js/jquery.min.js"></script>
<!-- Scripts supplémentaires comme Bootstrap, Owl Carousel, etc. -->
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>

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
