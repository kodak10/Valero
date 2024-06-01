<!DOCTYPE html>
<html lang="zxx">
    <head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap Min CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<!-- Owl Carousel Min CSS -->
		<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		<!-- Owl Theme Default Min CSS -->
		<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
		<!-- Remixicon CSS -->
		<link rel="stylesheet" href="assets/css/remixicon.css">
		<!-- Meanmenu Min CSS -->
		<link rel="stylesheet" href="assets/css/meanmenu.min.css">
		<!-- Style CSS -->
		<link rel="stylesheet" href="assets/css/style.css">
		<!-- Responsive CSS -->
		<link rel="stylesheet" href="assets/css/responsive.css">

		<!-- Favicon -->
		<link rel="icon" type="image/png" href="assets/images/favicon.png">
		<!-- Title -->
		<title>Valero Project</title>
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

		<!-- Start Newsletter Modal -->
		{{-- <div class="popup-overlay popup-hide">
			<div class="container">
				<div class="align-middle">
					<div class="popup-body">
						<div class="popup-close">
							<i class="ri-close-fill"></i>
						</div>

						<div class="row align-items-center">
							<div class="col-lg-12">
								<div class="modal-newsletter">
									<h3>INFORMATION</h3>
									<p>Le site est en construction...</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> --}}
		<!-- End Newsletter Modal -->

		<!-- Start Product View One Area -->
        <div class="modal fade product-view-one" id="exampleModal">
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
            </div>
        </div>
		<!-- End Product View One Area -->

		<!-- Start Go Top Area -->
		<div class="go-top">
			<i class="ri-arrow-up-s-fill"></i>
			<i class="ri-arrow-up-s-fill"></i>
		</div>
		<!-- End Go Top Area -->

        <!-- Jquery Min JS -->
        <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery.min.js"></script>
        <!-- Bootstrap Bundle Min JS -->
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <!-- Meanmenu Min JS -->
		<script src="assets/js/meanmenu.min.js"></script>
		<!-- Owl Carousel Min JS -->
		<script src="assets/js/owl.carousel.min.js"></script>
		<!-- Range Slider Min JS -->
		<script src="assets/js/range-slider.min.js"></script>
		<!-- Form Validator Min JS -->
		<script src="assets/js/form-validator.min.js"></script>
		<!-- Contact JS -->
		<script src="assets/js/contact-form-script.js"></script>
		<!-- Ajaxchimp Min JS -->
		<script src="assets/js/ajaxchimp.min.js"></script>
        <!-- Custom JS -->
		<script src="assets/js/custom.js"></script>
    </body>
</html>
