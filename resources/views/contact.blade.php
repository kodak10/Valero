@extends('layouts.app')
@section('content')
<!-- Start Page Title Area -->
		<div class="page-title-area">
			<div class="container">
				<div class="page-title-content">
					<ul>
						<li>
							<a href="/">
								Accueil 
							</a>
						</li>

						<li class="active">Contact</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

		<!-- End Contact Area -->
		<section class="contact-area ptb-54">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<div class="contact-info-europe">
							<h3>Contacts</h3>

							<ul>
								
								<li>
									<i class="ri-map-pin-line"></i>
									Abidjan,Boulevard Carde, non loin de la pharmacie Carde
								</li>
								<li>
									<i class="ri-phone-line"></i>
									<a href="tel:+2250789399871">+225 0789399871</a>
									<a href="tel:+2250748325809">+225 0748325809</a>
								</li>
								<li>
									<i class="ri-mail-send-line"></i>
                            		<a href="#"><span class="">btechlineinfo@gmail.com</span></a>
								</li>
								
							</ul>
						</div>
					</div>

					<div class="col-lg-8">
						<div class="map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14472.418608564649!2d91.8415882!3d24.92850455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1629205389502!5m2!1sen!2sbd"></iframe>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Contact Area -->

		<!-- Start Contact Area -->
		<section class="contact-area pb-54">
			<div class="container">
				<div class="contact-form">
					<h2>Laisser un message</h2>

					
						<form method="POST" action="{{ route('contact.send') }}">
                        @csrf
						<div class="row">
							<div class="col-lg-6 col-sm-6">
								<div class="form-group">
									<label>Nom & Prénoms</label>
									<input type="text" name="name" id="name" class="form-control" required="" data-error="S'il vous plaît entrez votre nom">
									<div class="help-block with-errors"></div>
								</div>
							</div>

							<div class="col-lg-6 col-sm-6">
								<div class="form-group">
									<label>Email</label>
									<input type="email" name="email" id="email" class="form-control" required="" data-error="S'il vous plaît entrez un email valide">
									<div class="help-block with-errors"></div>
								</div>
							</div>

							

							<div class="col-lg-12">
								<div class="form-group">
									<label>Message</label>
									<textarea name="message" class="form-control" id="message" cols="30" rows="6" required="" data-error="S'il vous plaît entrez unmessage"></textarea>
									<div class="help-block with-errors"></div>
								</div>
							</div>

							<div class="col-12">
								<div class="form-check ps-0">
									<div class="form-group">
										<div class="form-check">
											<input name="gridCheck" value="I agree to the terms and privacy policy." class="form-check-input" type="checkbox" id="gridCheck" required="">
									
											<label class="form-check-label" for="gridCheck">
												Je suis d'accord avec les <a href="#">conditions </a> et <a href="#">politique de confidentialité.</a>
											</label>
											<div class="help-block with-errors gridCheck-error"></div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-lg-12 col-md-12">
								
								<button type="submit" class="default-btn">
									<span>Envoyer</span>
								</button>
								{{-- <div id="msgSubmit" class="h3 text-center hidden"></div>
								<div class="clearfix"></div> --}}
							</div>
						</div>
					</form>
				</div>
			</div>
		</section>
		<!-- End Contact Area -->

		@include('layouts.footer_importer_image')

@endsection()