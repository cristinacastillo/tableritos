<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<title>@lang('messages.lbtablero')</title>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Font -->
    <!--<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300;500;700&display=swap" rel="stylesheet">

    <!-- Estilos -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/tableros.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}" />


    <!-- Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">



</head>
<body>

	<section class="nav-bar">
        <div class="nav-container">
            <div class="brand">
                <a href="{{ route('tablero.ver') }}"><img src="{{ asset('img/dog.png') }}"></a>
            </div>
            <nav>
                <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
                <ul class="nav-list">


                    @guest
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                    	<li  class="li" style="margin-top: 18px">
                    		<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" style="width: 150px" placeholder="E-Mail Address" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </li>
                        <li  class="li" style="margin-top: 18px">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" style="width: 150px" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    	</li>
                    	<li style="margin-top: 18px">
	                    	<button type="submit" class="btn btn-primary">
	                                    {{ __('Login') }}
	                        </button>
	                       </form>
                    	</li>

						@if (Route::has('register'))
						<li class="li">
							<a class="" href="{{ route('register') }}">{{ __('Register') }}</a>
						</li>
						@endif

					@else
						<li class="li">
							<a class="" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
							{{ __('Logout') }}
							</a>

							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							@csrf
							</form>
						</li>
                   	@endguest


                    <!--<li class="li">
                        <a href="#">2</a>
                        <ul class="nav-dropdown">
                            <li class="li">
                                <a href="#">1</a>
                            </li>
                            <li class="li">
                                <a href="#">2</a>
                            </li>
                            <li class="li">
                                <a href="#">3</a>
                            </li>
                        </ul>
                    </li>-->

                </ul>
            </nav>
        </div>
    </section>

	<div class="container mt-4">

		<!-- navegación -->
		<div class="row">
			<div class="col text-right">
				<a href=""><i class="far fa-flag"></i> Español</a> |
				<a href=""><i class="far fa-flag"></i> Inglés</a>
			</div>
		</div>

		<!-- título -->
		<div class="row">
			<div class="col">
				<h1>@lang('messages.lbtablero') @yield('titulo')</h1>
			</div>
		</div>

		<!-- cuerpo -->
		<div class="row">
			<div class="col">
			@yield('cuerpo')
			</div>
		</div>

	</div>
	<!-- Links para js del nav, importante colocarlos aquí y en este orden -->
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script type="text/javascript" src="{{ asset('js/nav.js') }}"></script>

</body>
</html>
