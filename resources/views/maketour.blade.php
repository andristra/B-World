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
            <h2>Create a new tournament</h2>
			@php
				$games = \App\Game::all();
				$items = \App\Item::all();
			@endphp
            <form action="turn" method="post">
                {!! csrf_field() !!}
				@foreach ($games as $game)
				@php
				$i=$game->id;
				@endphp
				<input type="radio" id="obj" name="obj" placeholder="obj" value={{$game->id}}>
				<img src={{$game->info}} width='400' > 
					<br>

				@endforeach
				 <div class="form-group">
                    <label for="info">Info</label>
					<br>
                    <textarea class="form-control" id="genre" name="info" placeholder="info"></textarea>
                </div>
				<br>
				<br>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>

<a href="{{ url('/game') }}">Back to games</a>
</body>