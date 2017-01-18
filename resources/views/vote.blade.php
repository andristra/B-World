    <head>
        <title>BoardGameWorld</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="{{ asset('/css/stylesheet.css') }}" rel="stylesheet">
    </head>
	<body>        
	<h1>Board Game World</h1>


    <div class="container">
        <div class="row">
            <h2>Vote for a new game</h2>
			@php
				$games = \App\Game::all();
			@endphp
            <form action="vote" method="post">
                {!! csrf_field() !!}
				@foreach ($games as $game)
				<input type="radio" id="selection" name="selection" placeholder="selection" value={{$game->id}}>
				<img src={{$game->info}} width='400' > <br>
				@endforeach
				
				<br>
				<br>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>

<a href="{{ url('/game') }}">Back to games</a>
</body>