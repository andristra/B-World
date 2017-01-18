<!DOCTYPE html>
<html lang="en">  
  <head>
        <title>BoardGameWorld</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="{{ asset('/css/stylesheet.css') }}" rel="stylesheet">
    </head>
	<body>        
	<h1>Board Game World</h1>

	@if (Route::has('login'))
                <div class="top-right links">
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                </div>
    @endif
	<nav class="menu" id="menu">
            <ul id="main-menu">

                <li><a href="{{ url('/tournament') }}">Tournaments</a></li>
				<li><a href="{{ url('/purchase') }}">Purchase</a></li>
				<li><a href="{{ url('/rent') }}">Rent</a></li>
			
            </ul>
    </nav>
		@php
		$games = \App\Game::all();
		@endphp
@foreach ($games as $game)
	<div class="card">
		<div class="container">
		<img src={{$game->info}} alt='oops, the game disappeared!' width='400' >
		<h4>
		{{$game->name_s}}
		</h4>
		<p>
		</p>
	</div>
	</div>
@endforeach

	</body>
	</html>