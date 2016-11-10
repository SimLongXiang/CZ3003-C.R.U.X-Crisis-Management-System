<!doctype html>
<html>

<head>

	@include('includes.head')
	
</head>
<body>
	@include('includes.publicHeader')

	<div id="main" class="row">
	
	
		<div id="content">
			@yield('content')
		</div>
	</div>
	</body>
	</html>