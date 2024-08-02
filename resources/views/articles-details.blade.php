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

                <li class="active">Details</li>
				<li class="active">{{$article->nom}}</li>

            </ul>
        </div>
    </div>
</div>
		<!-- Start Product Details Area -->
		<section class="product-details-area ptb-54">
			<div class="container">
				<div class="row align-items-center">
					<div class="product-view-one">
						<div class="modal-content p-0">
							<div class="row align-items-center">
								<div class="col-lg-6">
									<div class="product-view-one-image">
										<div id="big" class="owl-carousel owl-theme">

											

											@if ($article->images)
											@php
												$images = json_decode($article->images, true); // Décodez le JSON en tableau
											@endphp
										
											@if (is_array($images) && count($images) > 0)
												@foreach ($images as $image)
												<div class="item">
													<img src="{{ asset('images/articles/' . $image) }}" style="max-width: 100px; max-height: 100px;" alt="Image">
												</div>

													
												@endforeach
											@else
												<p>Aucune image disponible.</p>
											@endif
										@endif
		
											
										</div>
		
										<div id="thumbs" class="owl-carousel owl-theme">

											
		
											@if ($article->images)
											@php
												$images = json_decode($article->images, true); // Décodez le JSON en tableau
											@endphp
										
											@if (is_array($images) && count($images) > 0)
												@foreach ($images as $image)
												<div class="item">
													<img src="{{ asset('images/articles/' . $image) }}" style="max-width: 50px; max-height: 50px;" alt="Image">
												</div>

												

													
												@endforeach
											@else
												<p>Aucune image disponible.</p>
											@endif
										@endif
										</div>
									</div>
								</div>
		
								<div class="col-lg-6">
									<div class="product-content ml-15">
										<h3>
											{{$article->nom}}
										</h3>
		
										<div class="product-review">
											<div class="rating">
												<i class="ri-star-fill"></i>
												<i class="ri-star-fill"></i>
												<i class="ri-star-fill"></i>
												<i class="ri-star-fill"></i>
												<i class="ri-star-fill"></i>
											</div>
											<a href="#reviews" class="rating-count">4 Reviews</a>
										</div>
		
										<div class="price">
											<span class="new-price">{{$article->prix}}</span>
											<span class="in-stock">En Stock</span>
										</div>
										
										<ul class="product-info">
											<li>
												<p>{{$article->description}}</p>
											</li>
											<li>
												<span>Catégorie:</span> 
												
											</li>
											<li>
												<span>Format:</span> 
												{{$article->taille_format}}
											</li>
											<li>
												<span>Qualité:</span> 
													@if ($article->second_mains == "0")
													Nouveaux
												@else
													Seconde mains
                                            	@endif
											</li>
											
										</ul>
		
										<div class="product-color-switch">
											<ul>
												<li>
													<span>Couleur:</span>
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
													<i class="ri-add-line"></i>
												</span>
		
												<input type="text" value="1">
		
												<span class="plus-btn">
													<i class="ri-subtract-line"></i>
												</span>
											</div>
											
											<a href="" class="default-btn">
												<form action="{{ route('cart.store') }}" method="POST">
													@csrf
													<input type="hidden" name="article_id" value="{{ $article->id }}">
													<button type="submit" class="default-btn">
														<i class="ri-shopping-cart-line"></i>
														Ajouter au panier
													</button>
												</form>
											</a>

											
										</div>
		
										<div class="wishlist-btn">
											<form action="{{ route('wishlist.store') }}" method="POST">
												@csrf
												<input type="hidden" name="article_id" value="{{ $article->id }}">
												<button type="submit" class="wish-btn">
													<i class="ri-heart-line"> Mon Souhait</i>
												</button>
											</form>

											
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
					</div>

					<div class="col-lg-12 col-md-12">
						<div id="reviews" class="tab products-details-tab">
							<div class="row">
								<div class="col-lg-12 col-md-12">
									<ul class="tabs">
										<li>
											Description
										</li>
										
										<li>
											Commentaires
										</li>
									</ul>
								</div>

								<div class="col-lg-12 col-md-12">
									<div class="tab_content">
										<div class="tabs_item">
											<div class="products-details-tab-content">
												<h3>Description</h3>

												<p>
													{{ $article->description }}
												</p>

											</div>
										</div>

										

										<div class="tabs_item">
											<div class="products-details-tab-content">
												<div class="product-review-form">
													<h3>Commentaires des clients</h3>
										
													{{-- <div class="review-title">
														<div class="rating">
															<i class="ri-star-fill"></i>
															<i class="ri-star-fill"></i>
															<i class="ri-star-fill"></i>
															<i class="ri-star-fill"></i>
															<i class="ri-star-fill"></i>
														</div>
														<p>Based on 3 reviews</p>
														<!-- Vous pouvez ajouter un lien pour écrire une revue si vous le souhaitez -->
														<!-- <a href="#" class="btn default-btn">Write A Review</a> -->
													</div> --}}

													<div class="review-comments">
														@foreach ($comments as $comment)
															<div class="review-item">
																<div class="rating">
																	@for ($i = 1; $i <= 5; $i++)
																		<i class="ri-star-fill {{ $comment->rating >= $i ? 'text-warning' : 'text-muted' }}"></i>
																	@endfor
																</div>
													
																<h3>{{ $comment->title }}</h3>
													
																<span><strong>{{ $comment->user->name }}</strong> on <strong>{{ $comment->created_at->format('F j, Y') }}</strong></span>
													
																<p>{{ $comment->comment }}</p>
													
																<a href="#" class="review-report-link">Signaler comme étant inapproprié</a>
															</div>
														@endforeach
													</div>
													
										
													<!-- Affichage des commentaires -->
													<div class="review-comments">
														@foreach ($article->comments as $comment)
															<div class="review-item">
																<div class="rating">
																	@for ($i = 0; $i < 5; $i++)
																		<i class="ri-star-fill"></i>
																	@endfor
																</div>
																<h3>{{ $comment->user->name }}</h3>
																<span><strong>{{ $comment->user->name }}</strong> on <strong>{{ $comment->created_at->format('F j, Y') }}</strong></span>
																<p>{{ $comment->comment }}</p>
																@if (Auth::check() && Auth::id() === $comment->user_id)
																	<form action="{{ route('comments.destroy', $comment->id) }}" method="POST" style="display:inline;">
																		@csrf
																		@method('DELETE')
																		<button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
																	</form>
																@endif
															</div>
														@endforeach
													</div>
										
													<!-- Formulaire d'ajout de commentaire -->
													<div class="review-form">
														<h3>Écrire un commentaire</h3>
														<form action="{{ route('comments.store') }}" method="POST">
															@csrf
															<div class="form-group">
																<label for="rating">Évaluation (de 1 à 5)</label>
																<div class="rating">
																	<input type="radio" id="star1" name="rating" value="1">
																	<label for="star1" class="ri-star-fill"></label>
																	<input type="radio" id="star2" name="rating" value="2">
																	<label for="star2" class="ri-star-fill"></label>
																	<input type="radio" id="star3" name="rating" value="3">
																	<label for="star3" class="ri-star-fill"></label>
																	<input type="radio" id="star4" name="rating" value="4">
																	<label for="star4" class="ri-star-fill"></label>
																	<input type="radio" id="star5" name="rating" value="5">
																	<label for="star5" class="ri-star-fill"></label>
																</div>
															</div>

															<input type="hidden" name="article_id" value="{{ $article->id }}">
															<div class="row">
																<div class="col-lg-6 col-md-6">
																	<div class="form-group">
																		<label>Nom</label>
																		<input type="text" id="Nom" name="name" value="{{ old('name') }}" placeholder="Enter votre nom" class="form-control">
																		@error('name')
																			<div class="text-danger">{{ $message }}</div>
																		@enderror
																	</div>
																</div>
										
																<div class="col-lg-6 col-md-6">
																	<div class="form-group">
																		<label>Email</label>
																		<input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Enter votre email" class="form-control">
																		@error('email')
																			<div class="text-danger">{{ $message }}</div>
																		@enderror
																	</div>
																</div>
										
																<div class="col-lg-12 col-md-12">
																	<div class="form-group">
																		<label>Titre</label>
																		<input type="text" id="review-title" name="review-title" value="{{ old('review-title') }}" placeholder="Enter le titre" class="form-control">
																		@error('review-title')
																			<div class="text-danger">{{ $message }}</div>
																		@enderror
																	</div>
																</div>
										
																<div class="col-lg-12 col-md-12">
																	<div class="form-group">
																		<label>Commentaire</label>
																		<div class="form-group">
																			<label for="comment">Commentaire</label>
																			<textarea id="comment" name="comment" rows="4" class="form-control" required>Commentaire</textarea>
																			@error('comment')
																			<div class="text-danger">{{ $message }}</div>
																			@enderror
																		</div>
																		
																	</div>
																</div>
										
																<div class="col-lg-12 col-md-12">
																	<button type="submit" class="btn default-btn">Soumettre</button>
																</div>
															</div>
														</form>

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
												</div>
											</div>
										</div>
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Product Details Area -->

		<!-- Start Related Products Area -->
		<section class="best-seller-area pb-30">
			<div class="container">
				<div class="section-title">
					<h2>Produits associés</h2>
				</div>
		
				<div class="best-product-slider owl-carousel owl-theme">
					@forelse ($associatedProducts as $product)
						<div class="single-products">
							<div class="product-img">
								<a href="#">
									<img src="{{ asset('images/articles/' . $product->images[0]) }}" alt="Image">
								</a>
							</div>
		
							<div class="product-content">
								<a href="#" class="title">
									{{ $product->nom }}
								</a>
		
								<ul class="products-rating">
									@for ($i = 0; $i < 5; $i++)
										<li>
											<i class="ri-star-fill"></i>
										</li>
									@endfor
									<li>
										<a href="#">
											({{ $product->reviewsCount() }} Avis)
										</a>
									</li>
								</ul>
		
								<ul class="products-price">
									<li>
										{{ number_format($product->prix, 2) }} FCFA
										{{-- <del>${{ number_format($product->prix + 50, 2) }}</del> <!-- Juste un exemple pour l'ancien prix --> --}}
									</li>
									{{-- <li>
										<span>In Stock</span>
									</li> --}}
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
										<button class="eye-btn">
											<a href="{{ route('article.details', ['id' => $article->id]) }}">
												<i class="ri-eye-line"></i>
											</a>
											
											
										</button>
									</li>
								</ul>
							</div>
						</div>
					@empty
						<p>Aucun produit associé disponible.</p>
					@endforelse
				</div>
			</div>
		</section>
		
		<!-- End Related Products Area -->

	
		@include('layouts.footer_importer_image')

@endsection()