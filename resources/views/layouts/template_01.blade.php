<!DOCTYPE html>
<html lang="es">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>BHT PROYECTOS | @yield('title')</title>

	<link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">
	<link rel="icon" type="image/vnd.microsoft.icon" href="{{ asset('images/favicon.ico') }}" />


	<!--NO GUARDAR CACHE -->
	<meta http-equiv="cache-control" content="max-age=0" />
	<meta http-equiv="cache-control" content="no-cache" />
	<meta http-equiv="cache-control" content="no-store" />
	<meta http-equiv="cache-control" content="must-revalidate" />
	<meta http-equiv="expires" content="0" />
	<meta http-equiv="pragma" content="no-cache" />

	<link href="{{asset('libraries/bootstrap-5.3.3/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('libraries/fontawesome-free-6.7.2/css/fontawesome.min.css')}}" rel="stylesheet">
	<link href="{{asset('libraries/fontawesome-free-6.7.2/css/solid.min.css')}}" rel="stylesheet">

	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>

	<script type="text/javascript" src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script type="text/javascript" src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->


	@yield('style')

</head>

<body>
	<div class="loading" style="display: none;"></div>

	<nav class="navbar navbar-expand-lg navbar-default p-0">
		<div class="container">
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#app-navbar-collapse" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<a class="navbar-brand" href="{{ url('/') }}">
				<img alt="Brand" src="{{asset('images/logo.png')}}" class="img-responsive" />
			</a>


			<div class="collapse navbar-collapse" id="app-navbar-collapse">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					@if (Auth::guest())
					<li><a href="{{ url('login') }}">Login</a></li>
					@else
					<li class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false">
							{{ Auth::user()->name }}
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu" role="menu">
							<li>
								<a href="{{ url('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
									Logout
								</a>
								<form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
									{{ csrf_field() }}
								</form>
							</li>

						</ul>
					</li>
					@endif
					<li class="nav-item"><a href="{{ url('/') }}">Inicio</a></li>
					<li class="nav-item"><a href="{{ url('/proyectos') }}">Proyectos</a></li>
				</ul>
			</div>
		</div>
	</nav>

	@yield('content')

	@yield('modal')

	<script type="text/javascript" src="{{asset('libraries/bootstrap-5.3.3/js/bootstrap.bundle.min.js')}}"></script>

	@yield('javascript')

</body>

</html>