<!DOCTYPE html>
<html>
<head>
	<title>Mr. White</title>
	<link rel="stylesheet" type="text/css" href="{{mix('css/app.css')}}">
</head>
<body>
@include('partials._topbar')
@include('partials._sidebar')
@include('component.product-list-card')
@include('partials._footer')
<script type="text/javascript" src="{{mix('js/app.js')}} "></script>

</body>
</html>