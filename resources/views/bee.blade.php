<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<title>Hello World Application</title>
</head>
<body>
<h1>Hello World!</h1>
<?php

use App\game;

$games = DB::select('select * from games');
}?>
</body>
</html>