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
												<img src="assets/images/products/product-6.jpg" alt="Image">
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
												<img src="assets/images/products/product-6.jpg" alt="Image">
											</div>
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
											Additional Information
										</li>
										<li>
											Reviews
										</li>
									</ul>
								</div>

								<div class="col-lg-12 col-md-12">
									<div class="tab_content">
										<div class="tabs_item">
											<div class="products-details-tab-content">
												<h3>Product Description</h3>
												<p>Design inspiration lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi commodo, ipsum sed pharetra gravida, orci magna rhoncus neque, id pulvinar odio lorem non turpis. Nullam sit amet enim. Suspendisse id velit vitae ligula volutpat condimentum.  Aliquam erat volutpat. Sed quis velit. Nulla facilisi. Nulla libero. Vivamus pharetra posuere sapien. Nam consectetuer. Sed aliquam, nunc eget euismod ullamcorper, lectus nunc ullamcorper orci, fermentum bibendum enim nibh eget ipsum. Nam consectetuer. Sed aliquam, nunc eget euismod ullamcorper, lectus nunc ullamcorper orci, fermentum bibendum enim nibh eget ipsum. Nulla libero. Vivamus pharetra posuere sapien.</p>

												<p>Design inspiration lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi commodo, ipsum sed pharetra gravida, orci magna rhoncus neque, id pulvinar odio lorem non turpis. Nullam sit amet enim. Suspendisse id velit vitae ligula volutpat condimentum.  Aliquam erat volutpat. Sed quis velit. Nulla facilisi. Nulla libero. Vivamus pharetra posuere sapien. Nam consectetuer. Sed aliquam, nunc eget euismod ullamcorper, lectus nunc ullamcorper orci, fermentum bibendum enim nibh eget ipsum. Nam consectetuer.</p>

												<h3>Specification</h3>

												<ul class="specification">
													<li>Model: 001</li>
													<li>Battery Chemistry: Lithm</li>
													<li>Battery Voltage: 120V</li>
													<li>Battery Capacity: 1.0Ah</li>
													<li>Max Capacity In Metal: 20mm</li>
													<li>Weight: 2.5kg</li>
													<li>Drilling capacity: Concrete: 32 mm</li>
													<li>No Load Speed:0-520 rpm</li>
												</ul>
											</div>
										</div>

										<div class="tabs_item">
											<div class="products-details-tab-content">
												<ul class="additional-information">
													<li><span>Brand:</span> ThemeForest</li>
													<li><span>Color:</span> Brown</li>
													<li><span>Size:</span> Large, Medium</li>
													<li><span>Weight:</span> 27 kg</li>
													<li><span>Dimensions:</span> 16 x 22 x 123 cm</li>
												</ul>
											</div>
										</div>

										<div class="tabs_item">
											<div class="products-details-tab-content">
												<div class="product-review-form">
													<h3>Customer Reviews</h3>

													<div class="review-title">
														<div class="rating">
															<i class="ri-star-fill"></i>
															<i class="ri-star-fill"></i>
															<i class="ri-star-fill"></i>
															<i class="ri-star-fill"></i>
															<i class="ri-star-fill"></i>
														</div>
														<p>Based on 3 reviews</p>

														<a href="product-details.html" class="btn default-btn">Write A Review</a>
													</div>

													<div class="review-comments">
														<div class="review-item">
															<div class="rating">
																<i class="ri-star-fill"></i>
																<i class="ri-star-fill"></i>
																<i class="ri-star-fill"></i>
																<i class="ri-star-fill"></i>
																<i class="ri-star-fill"></i>
															</div>
															<h3>Good</h3>
															<span><strong>Admin</strong> on <strong>July 18, 2024</strong></span>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation labore et dolore</p>

															<a href="product-details.html" class="review-report-link">Report as Inappropriate</a>
														</div>

														<div class="review-item">
															<div class="rating">
																<i class="ri-star-fill"></i>
																<i class="ri-star-fill"></i>
																<i class="ri-star-fill"></i>
																<i class="ri-star-fill"></i>
																<i class="ri-star-fill"></i>
															</div>
															<h3>Good</h3>
															<span><strong>Admin</strong> on <strong>July 20, 2024</strong></span>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation labore et dolore</p>

															<a href="product-details.html" class="review-report-link">Report as Inappropriate</a>
														</div>

														<div class="review-item">
															<div class="rating">
																<i class="ri-star-fill"></i>
																<i class="ri-star-fill"></i>
																<i class="ri-star-fill"></i>
																<i class="ri-star-fill"></i>
																<i class="ri-star-fill"></i>
															</div>
															<h3>Good</h3>
															<span><strong>Admin</strong> on <strong>July 21, 2024</strong></span>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation labore et dolore</p>

															<a href="product-details.html" class="review-report-link">Report as Inappropriate</a>
														</div>
													</div>

													<div class="review-form">
														<h3>Write A Review</h3>

														<form>
															<div class="row">
																<div class="col-lg-6 col-md-6">
																	<div class="form-group">
																		<label>Name</label>
																		<input type="text" id="name" name="name" placeholder="Enter your name" class="form-control">
																	</div>
																</div>

																<div class="col-lg-6 col-md-6">
																	<div class="form-group">
																		<label>Email</label>
																		<input type="email" id="email" name="email" placeholder="Enter your email" class="form-control">
																	</div>
																</div>

																<div class="col-lg-12 col-md-12">
																	<div class="form-group">
																		<label>Review Title</label>
																		<input type="text" id="review-title" name="review-title" placeholder="Enter your review a title" class="form-control">
																	</div>
																</div>

																<div class="col-lg-12 col-md-12">
																	<div class="form-group">
																		<label>Body of Review (1500)</label>
																		<textarea name="review-body" id="review-body" cols="30" rows="8" placeholder="Write your comments here" class="form-control"></textarea>
																	</div>
																</div>

																<div class="col-lg-12 col-md-12">
																	<button type="submit" class="btn default-btn">Submit Review</button>
																</div>
															</div>
														</form>
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
					<h2>Related Products</h2>
				</div>

				<div class="best-product-slider owl-carousel owl-theme">
					<div class="single-products">
						<div class="product-img">
							<a href="product-details.html">
								<img src="assets/images/products/product-1.jpg" alt="Image">
							</a>
						</div>

						<div class="product-content">
							<a href="product-details.html" class="title">
								Cordless Drill Professional Combo Drill And Screwdriver
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
									<a href="product-details.html">
										(03 Review)
									</a>
								</li>
							</ul>

							<ul class="products-price">
								<li>
									$119.00
									<Del>$219.00</Del>
								</li>
								<li>
									<span>In Stock</span>
								</li>
							</ul>

							<ul class="products-cart-wish-view">
								<li>
									<a href="shopping-cart.html" class="default-btn">
										<i class="ri-shopping-cart-line"></i>
										Add To Cart
									</a>
								</li>
								<li>
									<a href="wishlist.html" class="wish-btn">
										<i class="ri-heart-line"></i>
									</a>
								</li>
								<li>
									<button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
										<i class="ri-eye-line"></i>
									</button>
								</li>
							</ul>
						</div>
					</div>

					<div class="single-products">
						<div class="product-img">
							<a href="product-details.html">
								<img src="assets/images/products/product-2.jpg" alt="Image">
							</a>
						</div>

						<div class="product-content">
							<a href="product-details.html" class="title">
								Professional Cordless Drill Power Tools Set Competitive Price
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
									<a href="product-details.html">
										(03 Review)
									</a>
								</li>
							</ul>

							<ul class="products-price">
								<li>
									$130.00
									<Del>$250.00</Del>
								</li>
								<li>
									<span>In Stock</span>
								</li>
							</ul>

							<ul class="products-cart-wish-view">
								<li>
									<a href="shopping-cart.html" class="default-btn">
										<i class="ri-shopping-cart-line"></i>
										Add To Cart
									</a>
								</li>
								<li>
									<a href="wishlist.html" class="wish-btn">
										<i class="ri-heart-line"></i>
									</a>
								</li>
								<li>
									<button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
										<i class="ri-eye-line"></i>
									</button>
								</li>
							</ul>
						</div>
					</div>

					<div class="single-products">
						<div class="product-img">
							<a href="product-details.html">
								<img src="assets/images/products/product-3.jpg" alt="Image">
							</a>
						</div>

						<div class="product-content">
							<a href="product-details.html" class="title">
								DFMALB 20V Max XX Oscillating Multi Tool Variable Speed Tool
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
									<a href="product-details.html">
										(03 Review)
									</a>
								</li>
							</ul>

							<ul class="products-price">
								<li>
									$150.00
									<Del>$200.00</Del>
								</li>
								<li>
									<span>In Stock</span>
								</li>
							</ul>

							<ul class="products-cart-wish-view">
								<li>
									<a href="shopping-cart.html" class="default-btn">
										<i class="ri-shopping-cart-line"></i>
										Add To Cart
									</a>
								</li>
								<li>
									<a href="wishlist.html" class="wish-btn">
										<i class="ri-heart-line"></i>
									</a>
								</li>
								<li>
									<button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
										<i class="ri-eye-line"></i>
									</button>
								</li>
							</ul>
						</div>
					</div>

					<div class="single-products">
						<div class="product-img">
							<a href="product-details.html">
								<img src="assets/images/products/product-4.jpg" alt="Image">
							</a>
						</div>

						<div class="product-content">
							<a href="product-details.html" class="title">
								Power Tools Set Chinese Manufacturer Production 50V 
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
									<a href="product-details.html">
										(03 Review)
									</a>
								</li>
							</ul>

							<ul class="products-price">
								<li>
									$111.00
									<Del>$222.00</Del>
								</li>
								<li>
									<span>In Stock</span>
								</li>
							</ul>

							<ul class="products-cart-wish-view">
								<li>
									<a href="shopping-cart.html" class="default-btn">
										<i class="ri-shopping-cart-line"></i>
										Add To Cart
									</a>
								</li>
								<li>
									<a href="wishlist.html" class="wish-btn">
										<i class="ri-heart-line"></i>
									</a>
								</li>
								<li>
									<button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
										<i class="ri-eye-line"></i>
									</button>
								</li>
							</ul>
						</div>
					</div>

					<div class="single-products">
						<div class="product-img">
							<a href="product-details.html">
								<img src="assets/images/products/product-5.jpg" alt="Image">
							</a>
						</div>

						<div class="product-content">
							<a href="product-details.html" class="title">
								Professional Cordless Drill Power Tools Set Competitive Price
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
									<a href="product-details.html">
										(03 Review)
									</a>
								</li>
							</ul>

							<ul class="products-price">
								<li>
									$222.00
									<Del>$250.00</Del>
								</li>
								<li>
									<span>In Stock</span>
								</li>
							</ul>

							<ul class="products-cart-wish-view">
								<li>
									<a href="shopping-cart.html" class="default-btn">
										<i class="ri-shopping-cart-line"></i>
										Add To Cart
									</a>
								</li>
								<li>
									<a href="wishlist.html" class="wish-btn">
										<i class="ri-heart-line"></i>
									</a>
								</li>
								<li>
									<button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
										<i class="ri-eye-line"></i>
									</button>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Related Products Area -->

	
		@include('layouts.footer_importer_image')

@endsection()