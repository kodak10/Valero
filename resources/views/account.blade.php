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

						<li class="active">Mon Compte</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

		<!-- Start User Area -->
		<section class="user-area ptb-54">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="user-form-content log-in-50 mr-15">
							<h3>Connexion</h3>
						
							<form class="user-form">
								<div class="row">
									<div class="col-12">
										<div class="form-group">
											<label>Email</label>
											<input class="form-control" type="text" name="name">
										</div>
									</div>
		
									<div class="col-12">
										<div class="form-group">
											<label>Mot de passe</label>
											<input class="form-control" type="password" name="password">
										</div>
									</div>
		
									<div class="col-12">
										<div class="login-action">
											<span class="log-rem">
												<input id="remember-2" type="checkbox">
												<label>Se souvenir de moi</label>
											</span>
											
											<span class="forgot-login">
												<a href="#">Mot de passe oublié ?</a>
											</span>
										</div>
									</div>
		
									<div class="col-12">
										<button class="default-btn" type="submit">
											Se Connecter
										</button>
									</div>
								</div>
							</form>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="user-form-content ml-15">
							<h3>Inscription</h3>

							<form class="user-form">
								<div class="row">
									<div class="col-12">
										<div class="form-group">
											<label>Nom & Prénoms</label>
											<input class="form-control" type="text" name="name">
										</div>
									</div>

									<div class="col-12">
										<div class="form-group">
											<label>Email</label>
											<input class="form-control" type="email" name="email">
										</div>
									</div>

									<div class="col-12">
										<div class="form-group">
											<label>Mot de passe</label>
											<input class="form-control" type="password" name="password">
										</div>
									</div>
		
									<div class="col-12">
										<button class="default-btn register" type="submit">
											S'inscrire
										</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End User Area -->

@endsection()