<!DOCTYPE html>
<html>
<head>
	<title>Laravel From Scratch</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{ elixir('css/app.css')}}">
</head>
<body>
	<div class="container">
		@yield('content')
	</div>
</body>
</html>