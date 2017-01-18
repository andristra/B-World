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
                <li><a href="{{ url('/game') }}">Game selection</a></li>
            </ul>
    </nav>
			@php
		$tournaments = \App\tournament::all();
		@endphp
@foreach ($tournaments as $tournament)
	<div class="card">
		<div class="container">
		<img src={{\App\Game::find($tournament->game_id)->info}} alt='oops, the game disappeared!' width="400" >
		<h4>
			{{\App\Game::find($tournament->game_id)->name_s}}
		</h4>
		<p>
		{{$tournament->info_s}}
		</p>
	</div>
	</div>
@endforeach

	</body>
	</html>