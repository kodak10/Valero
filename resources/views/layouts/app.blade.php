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
		<link rel="icon" type="image/png" href="{{asset('assets/images/favicon.png')}}">
		<!-- Title -->
		<title>Valero Project</title>

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
						<form>
							<div class="form-group">
								<input type="file" class="form-control-file" id="file-input" accept="image/*">
							</div>
							<button type="submit" class="btn btn-primary">Importer</button>
						</form>
					</div>
				</div>
			</div>
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
    </body>
</html>
