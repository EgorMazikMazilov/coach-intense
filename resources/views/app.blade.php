<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Коучинг Интенсив</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

	{{--<!-- Fonts -->--}}
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	{{--<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->--}}
	{{--<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->--}}
	{{--<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->--}}
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Коучинг Интенсив</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="{{ url('/auth/login') }}">Вход</a></li>
						<li><a href="{{ url('/auth/register') }}">Регистрация</a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/auth/logout') }}">Выход</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>

	@yield('content')

	{{--<!-- Scripts -->--}}
	{{--<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->--}}
	<script src="{{asset ('assets/vendor/jquery-1.11.3.min.js') }}"></script>
	{{--<!-- Include all compiled plugins (below), or include individual files as needed -->--}}
	<script src="{{asset ('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>
