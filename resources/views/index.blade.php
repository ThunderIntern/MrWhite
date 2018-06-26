<!DOCTYPE html>
<html>
<head>
	<title>Mr. White</title>
	<link rel="stylesheet" type="text/css" href="{{mix('css/app.css')}}">
</head>
<body>

@include('component.hero')
@include('component.pomade-category')
@include('component.brand-category')
@include('component.sale-product')
@include('component.product-list-card-8')

@include('partials._footer')
<script type="text/javascript" src="{{mix('js/app.js')}} "></script>
</body>
</html>