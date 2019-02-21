<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<title>@yield('title')</title>
</head>
<body>
<div id="main-content">
	@include('branding')
	@include('nav')
	@yield('content')
</div>
    <script type="text/javascript" src="/js/app.js"></script>
</body>
</html>