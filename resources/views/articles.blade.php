@extends('layouts.app')
@section('content')

<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <ul>
                <li>
                    <a href="/">
                        Accueil 
                    </a>
                </li>

                <li class="active">Articles</li>
            </ul>
        </div>
    </div>
</div>

<section class="products-area ptb-54">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="widget-sidebar mr-15">
                    <div class="sidebar-widget categories">
                        <ul>
                            @foreach ($allCategories as $allCategorie)
                                <li>
                                    <h3>{{$allCategorie->nom}}</h3>
                                </li>
                            @endforeach
                            
                        </ul>
                    </div>

                    <div class="sidebar-widget filter">
                        <h3>Filter par prix</h3>
                        <form class="price-range-content">
                            <div class="price-range-bar ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" id="range-slider"><div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 0%; width: 100%;"></div><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 0%;"></span><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 100%;"></span></div>
                            <div class="price-range-filter">
                                <div class="price-range-filter-item">
                                    <input type="text" id="price-amount" readonly="">
                                </div>
                            </div>
                        </form>
                    </div>

                    

                    <div class="product-color">
                        <div class="product-color-switch">
                            
                            <ul>
                                <li class="title">
                                    <h3>Couleur</h3>
                                </li>
                                <li>
                                    <button title="Black" class="color-d9d9d9"></button>
                                </li>
                                <li>
                                    <button title="White" class="color-f759ab"></button>
                                </li>
                                <li class="active">
                                    <button title="Green" class="color-9254de"></button>
                                </li>
                                <li>
                                    <button title="Yellow Green" class="color-597ef7"></button>
                                </li>
                                <li>
                                    <button title="Teal" class="color-40a9ff"></button>
                                </li>
                                <li>
                                    <button title="Teal" class="color-36cfc9"></button>
                                </li>
                                <li>
                                    <button title="Teal" class="color-73d13d"></button>
                                </li>
                                <li>
                                    <button title="Teal" class="color-bae637"></button>
                                </li>
                                <li>
                                    <button title="Teal" class="color-ffec3d"></button>
                                </li>
                                <li>
                                    <button title="Teal" class="color-ffc53d"></button>
                                </li>
                                <li>
                                    <button title="Teal" class="color-9ae6b4"></button>
                                </li>
                                <li>
                                    <button title="Teal" class="color-ff7a45"></button>
                                </li>
                                <li>
                                    <button title="Teal" class="color-ff4d4f"></button>
                                </li>
                                <li>
                                    <button title="Teal" class="color-63b3ed"></button>
                                </li>
                                <li>
                                    <button title="Teal" class="color-d69e2e"></button>
                                </li>
                                <li>
                                    <button title="Teal" class="color-c05621"></button>
                                </li>
                                <li>
                                    <button title="Teal" class="color-38b2ac"></button>
                                </li>
                                <li>
                                    <button title="Teal" class="color-b794f4"></button>
                                </li>
                                <li>
                                    <button title="Teal" class="color-fbb6ce"></button>
                                </li>
                                <li>
                                    <button title="Teal" class="color-000000"></button>
                                </li>
                                <li>
                                    <button title="Teal" class="color-2d3748"></button>
                                </li>
                            </ul>		
                         </div>
                    </div>

                    <div class="sidebar-widget brand">
                        <ul>
                            <li>
                                <h3>Qualités</h3>
                            </li>
                            <li>
                                <div class="form-group checkboxs">
                                    <input type="checkbox" class="chb2" id="nouveau" name="nouveau">
                                    <label for="nouveau">Nouveau <span>({{ $countNouveau }})</span></label>
                                </div>
                            </li>
                            <li>
                                <div class="form-group checkboxs">
                                    <input type="checkbox" class="chb2" id="occasion" name="occasion">
                                    <label for="occasion">Seconde mains <span>({{ $countOccasion }})</span></label>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="trendingss">
                        <ul class="trending-product-list">
                            <li>
                                <h3>Produits tendance</h3>
                            </li>
                            @foreach ($trendingArticles as $trendingArticle)
                            <li class="single-list">
                                <img src="{{ asset('images/articles/' . $trendingArticle->couverture) }}" style="height: 100px !important" alt="Image">

                                <div class="product-content">
                                    <a href="product-details.html" class="title">
                                        {{$trendingArticle->nom}}
                                    </a>

                                    <ul class="products-price">
                                        <li>
                                            {{$trendingArticle->prix}}
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
                            @endforeach

                           
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="sale-offer-bg product-page">
                    <h5>Sale offer - <span>30% off</span></h5>
                    <h3>All types of premium quality tools</h3>
                    <a href="products.html" class="default-btn">
                        <i class="ri-shopping-cart-line"></i>
                        Shop Now
                    </a>
                </div>
                
                <div class="showing-result">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="products-filter-options">
                                <div class="view-list-row">
                                    <div class="view-column">
                                        <a href="javascript:;" class="icon-view-three active">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </a>
                                        <a href="javascript:;" class="view-grid-switch">
                                            <span></span>
                                            <span></span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="showing-result-count">
                                <p>Affichage de {{ $articles->count() }} sur {{$nbrArticle->count()}} produits</p>                            </div>
                            
                        </div>
                        
                        <div class="col-lg-6 col-md-6">
                            <div class="showing-top-bar-ordering">
                                <form class="d-flex" action="{{ route('articles.filter') }}" method="GET">
                                    
                                    <select class="form-select mr-3 " name="categorie_id" aria-label="Sélectionnez une catégorie">
                                        <option value="">Tous les articles</option>
                                        @foreach ($allCategories as $allCategorie)
                                            <option value="{{ $allCategorie->id }}" {{ request()->get('categorie_id') == $allCategorie->id ? 'selected' : '' }}>
                                                {{ $allCategorie->nom }}
                                            </option>                                        @endforeach
                                    </select>
                                    <button type="submit" class="btn btn-primary">Filtrer</button>
                                </form>
                            </div>
                        </div>
                        
                    </div>
                </div>

                <div id="products-filter" class="products-collections-listing row justify-content-center">

                    @foreach ($articles as $article)
                        <div class="col-lg-4">
                            <div class="single-products">
                                <div class="product-img">
                                    <a href="{{ route('article.details', ['id' => $article->id]) }}">
                                        <img src="{{ asset('images/articles/' . $article->couverture) }}" style="height: 150px !important" alt="Image">
                                    </a>
                                </div>
        
                                <div class="product-content">
                                    <a href="{{ route('article.details', ['id' => $article->id]) }}" class="title">
                                        {{$article->nom}}
                                    </a>
        
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
                                        <li>
                                            <a href="{{ route('article.details', ['id' => $article->id]) }}">
                                                (03 Review)
                                            </a>
                                        </li>
                                    </ul>
        
                                    <ul class="products-price">
                                        <li>
                                            {{$article->prix}}
                                        </li>
                                        <li>
                                            @if ($article->second_mains === "0")
                                                <span>Nouveaux</span>
                                            @else
                                                <span>Seconde mains</span>
                                            @endif
                                        </li>
                                    </ul>
        
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
                                            <a class="eye-btn" href="{{ route('article.details', ['id' => $article->id]) }}">
                                                <i class="ri-eye-line"></i>
                                                
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                   

                    
                  

                    <div class="col-12">
                        <div class="pagination-area">
                            {{ $articles->links() }}
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>

@include('layouts.footer_importer_image')

@endsection()