<!DOCTYPE html>
<html>
<head>
	<title>Mr. White | Search {{ request()->input('search')}}</title>
	<link rel="icon" type="image/png" href="image/logo2.png">
	<link rel="stylesheet" type="text/css" href="{{mix('css/app.css')}}">
</head>
<body>
@include('partials._topbar')
@component('partials._breadcrumb')
	<li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item" aria-current="page">{{ request()->input('search') }}</li>
@endcomponent
@include('component.alert')
<div class="container">
	<div class="">
		<h1> Search Results</h1>
		<p>{{ $product->total() }} result(s) for '{{ request()->input('search')}}'</p>
	</div>
	<div class="row text-center">
		@forelse ($product as $products)
		<div class="col-sm-3">
			<div class="card-deck">
				<div class="card text-dark invinsible ">
					<a href="{{ route('shop.show', $products->barcode) }}"><img src="{{ "image/" . $products->url_gambar }}" class="image1"></a>
					<div class="middle">
						<p class="card-text">See Product Detail</p>
					</div>
					<div class="card-footer invinsible">
						<a href="{{ route('shop.show', $products->barcode) }}">
							{{ ucwords($products->nama) }}
							<p>Rp. {{ $products->presentPrice() }}</p>
						</a>
						{{-- <p>{{ $products->deskripsi }}</p> --}}
					</div>
				</div>
			</div>
		</div>
		@empty
		<div class="text-left">No Item Found</div>
		@endforelse
	</div>
	<div>
		{{ $product->appends(request()->input())->links() }}
	</div>
</div>
{{-- @include('component.product-list-card') --}}
@include('partials._footer')
<script type="text/javascript" src="{{mix('js/app.js')}} "></script>

</body>
</html>