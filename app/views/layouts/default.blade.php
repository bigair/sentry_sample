<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Charge</title>
	{{ HTML::style('/css/bootstrap.min.css') }}
</head>
<body>
	@yield('content')
	{{ HTML::script('/js/jquery/1.11.1/jquery.min.js') }}
	{{ HTML::script('/js/bootstrap.min.js') }}
</body>
</html>