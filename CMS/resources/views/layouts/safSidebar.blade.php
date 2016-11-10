<!doctype html>
<html>

<head>

	@include('includes.head')
	
</head>
<body>
	@include('includes.safHeader')

	<div id="main" class="row">
	
	
		<div id="content" class="col-mid-8">
			@yield('content')
		</div>
	</div>
	</body>
	</html>