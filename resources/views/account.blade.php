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
						
							<form class="user-form" method="POST" action="{{ route('login.post') }}">
								@csrf
								<div class="row">
									<div class="col-12">
										<div class="form-group">
											<label>Email</label>
											<input class="form-control @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
											@error('email')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>
									</div>
						
									<div class="col-12">
										<div class="form-group">
											<label>Mot de passe</label>
											<input class="form-control @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="current-password">
											@error('password')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>
									</div>
						
									<div class="col-12">
										<div class="login-action">
											<span class="log-rem">
												<input id="remember-2" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
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

							<form class="user-form" action="{{ route('register.store') }}" method="POST">
								@csrf
								<div class="row">
									<div class="col-12">
										<div class="form-group">
											<label>Nom & Prénoms</label>
											<input class="form-control" type="text" name="name" required>
										</div>
									</div>
					
									<div class="col-12">
										<div class="form-group">
											<label>Email</label>
											<input class="form-control" type="email" name="email" required>
										</div>
									</div>
					
									<div class="col-12">
										<div class="form-group">
											<label>Mot de passe</label>
											<input class="form-control" type="password" name="password" required>
										</div>
									</div>
					
									<div class="col-12">
										<div class="form-group">
											<label>Confirmer le mot de passe</label>
											<input class="form-control" type="password" name="password_confirmation" required>
										</div>
									</div>
					
									<div class="col-12">
										<button class="btn btn-primary" type="submit">
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
@endsection()