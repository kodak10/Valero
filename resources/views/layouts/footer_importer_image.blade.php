<!-- Start Subscribe Area -->
<section class="subscribe-area ptb-54">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-2">
                <div class="logo">
                    <a href="/">
                        <img src="{{asset('assets/images/logo.png')}}" alt="Image" style="height: 100px !important;">
                    </a>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="subscribe-content">
                    <p>Préparez la rentrée avec confiance grâce à nos fournitures scolaires de qualité supérieure – tout ce dont vos enfants ont besoin, en un seul clic !</p>
                </div>
            </div>

            <div class="col-lg-5">
                <form class="newsletter-form" action="{{ route('articles.searchText') }}" method="GET">
                    <input type="text" class="form-control" placeholder="Rechercher un article" value="{{ request()->input('search') }}">

                    <button class="submit-btn" type="submit" >
                        Valider
                    </button>

                    <div id="validator-newsletter" class="form-result"></div>
                </form>                
            </div>
        </div>
    </div>
</section>
<!-- End Subscribe  Area -->