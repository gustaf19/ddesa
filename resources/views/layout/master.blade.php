<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Desa Pasirsari</title>
	
	<link rel="stylesheet"  type="text/css" href="{!! asset('css/bootstrap.css')!!}">
	<link rel="stylesheet"  href="{!! asset('css/bootstrap.css.map')!!}">
	<link rel="stylesheet"  type="text/css" href="{!! asset('css/font-awesome.css') !!}" type="text/css">
	
	<link rel="stylesheet"  type="text/css" href="{!! asset('css/jquery-ui.css') !!}" type="text/css">
	<script src="{!! asset('js/jquery-2.1.4.js') !!}" type="text/javascript"></script>
	<script src="{!! asset('js/jquery-ui.js') !!}" type="text/javascript"></script>
	<script src="{!! asset('js/bootstrap.js') !!}" type="text/javascript"></script>

</head>
<body>
		@include('admin.include.bar')
		<main class="container-fluid">
			@yield('content')
		</main>
		
</body>

</html>