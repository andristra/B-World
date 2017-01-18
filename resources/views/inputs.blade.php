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
            <h2>Submit a new game</h2>
            <form action="yourinput" method="post">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label for="name">Name</label>
					<br>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="url">Url to photo</label>
					<br>
                    <input type="text" class="form-control" id="url" name="url" placeholder="URL">
                </div>
                <div class="form-group">
                    <label for="genre">Genre</label>
					<br>
                    <textarea class="form-control" id="genre" name="genre" placeholder="genre"></textarea>
                </div>
				<div class="form-group">
                    <label for="rate">Rate</label>
					<br>
                    <textarea class="text" id="rate" name="rate" placeholder="rate"></textarea>
                </div>
				<br>
				<br>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>

<a href="{{ url('/game') }}">Back to games</a>
</body>