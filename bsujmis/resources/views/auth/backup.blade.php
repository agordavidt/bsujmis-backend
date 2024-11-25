//Login

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Benue State Judiciary Unified Information Mangement</title>
    <meta name="description" content="Lawe is responsive multi-purpose HTML5 template compatible with Bootstrap 4. Take your Startup business website to the next level. It is designed for lawyer, Attorney, businesses or any type of person or business who wants to showcase their work, services and professional way.">
    <meta name="keywords" content="advocate, attorney, business, consult, consultant, consulting, corporate, government, justice, law, lawyer, lawyers, legal, political">
    <meta name="author" content="rometheme.net"> 
	

	<link rel="shortcut icon" href="{{ asset('assets/frontend/images/favicon.ico') }}">
	<link rel="apple-touch-icon" href="{{ asset('assets/frontend/images/apple-touch-icon.png') }}">
	<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/frontend/images/apple-touch-icon-72x72.png') }}">
	<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/frontend/images/apple-touch-icon-114x114.png') }}">
	

	<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/vendor/bootstrap.min.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/vendor/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/vendor/owl.carousel.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/vendor/owl.theme.default.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/vendor/magnific-popup.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/vendor/animate.min.css') }}">
	
	<!-- ==============================================
	Custom Stylesheet
	=============================================== -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/style.css') }}" />
	
    <script src="{{ asset('assets/frontend/js/vendor/modernizr.min.js') }}"></script>

</head>

<body>

	<!-- LOAD PAGE -->
	<div class="animationload">
		<div class="loader"></div>
	</div>
	
    	


<div class="container mt-5">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card text-center">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>












<script src="{{ asset('assets/frontend/js/vendor/jquery.min.js') }}"></script>
	<script src="{{ asset('assets/frontend/js/vendor/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/frontend/js/vendor/owl.carousel.js') }}"></script>
	<script src="{{ asset('assets/frontend/js/vendor/jquery.magnific-popup.min.js') }}"></script>

	<!-- SENDMAIL -->
	<script src="{{ asset('assets/frontend/js/vendor/validator.min.js') }}"></script>
	<script src="{{ asset('assets/frontend/js/vendor/form-scripts.js') }}"></script>

	<script src="{{ asset('assets/frontend/js/script.js') }}"></script>

</body>
</html>


// second text-primary


// Register
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Benue State Judiciary Unified Information Mangement</title>
    <meta name="description" content="Lawe is responsive multi-purpose HTML5 template compatible with Bootstrap 4. Take your Startup business website to the next level. It is designed for lawyer, Attorney, businesses or any type of person or business who wants to showcase their work, services and professional way.">
    <meta name="keywords" content="advocate, attorney, business, consult, consultant, consulting, corporate, government, justice, law, lawyer, lawyers, legal, political">
    <meta name="author" content="rometheme.net"> 
	

	<link rel="shortcut icon" href="{{ asset('assets/frontend/images/favicon.ico') }}">
	<link rel="apple-touch-icon" href="{{ asset('assets/frontend/images/apple-touch-icon.png') }}">
	<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/frontend/images/apple-touch-icon-72x72.png') }}">
	<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/frontend/images/apple-touch-icon-114x114.png') }}">
	

	<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/vendor/bootstrap.min.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/vendor/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/vendor/owl.carousel.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/vendor/owl.theme.default.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/vendor/magnific-popup.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/vendor/animate.min.css') }}">
	
	<!-- ==============================================
	Custom Stylesheet
	=============================================== -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/style.css') }}" />
	
    <script src="{{ asset('assets/frontend/js/vendor/modernizr.min.js') }}"></script>

</head>

<body>

	<!-- LOAD PAGE -->
	<div class="animationload">
		<div class="loader"></div>
	</div>
	

    <div class="container mt-5">
        <div class="row mt-3">
            <div class="col-8 mx-auto">
                    <div class="card-header text-center"> {{ __('Register') }} </div>
                    <div class="card-body p-3">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group">
                                <label for="name">{{ __('Name') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mt-4">
                                <label for="email">{{ __('Email Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="username">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mt-4">
                                <label for="password">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mt-4">
                                <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>

                            <div class="d-flex justify-content-end mt-4">
                                <a class="btn btn-link text-body" href="{{ route('login') }}">
                                    {{ __('Already registered?') }}
                                </a>

                                <button type="submit" class="btn btn-primary ms-4">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </form>
                    </div>

               
            </div>
        </div>
    </div>




<script src="{{ asset('assets/frontend/js/vendor/jquery.min.js') }}"></script>
	<script src="{{ asset('assets/frontend/js/vendor/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/frontend/js/vendor/owl.carousel.js') }}"></script>
	<script src="{{ asset('assets/frontend/js/vendor/jquery.magnific-popup.min.js') }}"></script>

	<!-- SENDMAIL -->
	<script src="{{ asset('assets/frontend/js/vendor/validator.min.js') }}"></script>
	<script src="{{ asset('assets/frontend/js/vendor/form-scripts.js') }}"></script>

	<script src="{{ asset('assets/frontend/js/script.js') }}"></script>

</body>
</html>


// 