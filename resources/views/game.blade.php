    <head>
        <title>BoardGameWorld</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <li><a href='#tournaments'>Tournaments</a></li>
            </ul>
    </nav>
@foreach ($games as $game)
	<div class="card">
		<div class="container">
		<img src={{$game->info}} alt='oops, the game disappeared!'>
		<h4>
		{{$game->name_s}}
		</h4>
		<p>
		
		</p>
		<button type="button">Click for more info!</button>
	</div>
	</div>
@endforeach
	</body>