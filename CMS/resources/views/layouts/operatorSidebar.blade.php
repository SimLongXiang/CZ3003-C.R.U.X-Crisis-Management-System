<!doctype html>
<html>

<head>

	@include('includes.head')
	
</head>
<body>
	@include('includes.operatorHeader')

	<div id="main" class="row">
	
	
		<div id="content">
			@yield('content')
		</div>
	</div>
	</body>
	</html>