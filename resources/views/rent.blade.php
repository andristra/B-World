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
            <h2>Rent a new game</h2>
			@php
				$games = \App\Game::all();
				$items = \App\Item::all();
			@endphp
            <form action="rent" method="post">
                {!! csrf_field() !!}
				@foreach ($games as $game)
				@php
				$i=$game->id;
				@endphp
				<input type="radio" id="thing" name="thing" placeholder="thing" value={{$game->id}}>
				<img src={{$game->info}} width='400' > 
					{{count(\App\Game::find($i)->items()->wherepurchased_n(0)->whererented_n(0)->get())}}<br>

				@endforeach
				
				<br>
				<br>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>

<a href="{{ url('/game') }}">Back to games</a>
</body>