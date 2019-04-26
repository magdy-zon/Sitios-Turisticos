<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
	<head>
			<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <meta name="description" content="Vacaciona">
	    <meta name="author" content="Interphy Soft">
	    <meta name="keyword" content="Sitios turísticos, vacaciona">
	    <link rel="shortcut icon" type="image/png" href="img/logo-tab.png">
			<title>Vacaciona</title>
			@include('layouts.includes.head_includes')
	</head>

	<body>
		@include('layouts.includes.header')

		<main>
			@yield('content')
		</main>

		@include('layouts.includes.footer')
    @include('layouts.includes.footer_includes')
    @yield('after_includes')
	</body>
</html>
