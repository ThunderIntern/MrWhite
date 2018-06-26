<!DOCTYPE html>
<html>
<head>
	<title>Mr. White</title>
	<link rel="stylesheet" type="text/css" href="{{mix('css/app.css')}}">
</head>
<body>
	@include('partials._topbar')
	<div class="bg-faded py-2">
		<div class="container">
			<div class="row">

				<div class="col-12">
					<div class="card-deck">

						<div class="card border-light mb-3 col-6">
							<a href="#"><img src="{{ $product->url_gambar }}" class="image"></a>
							
						</div>

						<div class="card mb-3 col-6 invinsible">
						<div class="card-header">
							Header
						</div>
						<div class="card-body">
							<h3>{{ $product->barcode }}</h3>
							<p>{{ $product->deskripsi }}</p>
							<p>{{ $product->harga }}</p>
						</div>
						<div class="card-footer">
							<a href="#" class="btn btn-primary">Beli Sekarang</a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	@include('component.recommended_product')
	@include('partials._footer')
	<script type="text/javascript" src="{{mix('js/app.js')}} "></script>
</body>
</html>