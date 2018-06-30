<!DOCTYPE html>
<html>
<head>
	<title>Mr. White | {{ ucwords($category_name) }}</title>
	<link rel="stylesheet" type="text/css" href="{{mix('css/app.css')}}">
</head>
<body>
@include('partials._topbar')
@component('partials._breadcrumb')
	<li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('shop.index') }}">Shop</a></li>
@endcomponent
@include('component.alert')

<div class="products-section container">
	<div class="sidebar">
		<h3>By Category</h3>
		<ul>
			<a href="{{ route('shop.index')}}">All Product</a>
			<h5>Category</h5>
				@foreach ($categories as $category)
					<li><a href="{{ route('shop.index', ['category'=>$category->name]) }}">{{ ucwords($category->name) }}</a></li>
				@endforeach
			<h5>Brand</h5>
				@foreach ($brand as $brands)
					<li><a href="{{ route('shop.index', ['brands'=>$brands->name]) }}">{{ ucwords($brands->name) }}</a></li>
				@endforeach
			<h5>Price</h5>
				<li><a href="{{ route('shop.index',['category'=>request()->category, 'price'=> 'under']) }}">Under 50k</a></li>
				<li><a href="{{ route('shop.index',['category'=>request()->category, 'price'=> 'mid']) }}">IDR 50k - 100k</a></li>
				<li><a href="{{ route('shop.index',['category'=>request()->category, 'price'=> 'high']) }}">IDR 100k - 200k</a></li>
				<li><a href="{{ route('shop.index',['category'=>request()->category, 'price'=> 'over']) }}">Above IDR 200k</a></li>
		</ul>
	</div> {{-- end of sidebar --}}
	<div>
		<div class="products-header">
			<h1> {{ ucwords($category_name) }}</h1>
			<div>
				<strong>Sort By:</strong>
				<ul>
					<li><a href="{{ route('shop.index',['category'=>request()->category, 'sort'=> 'low']) }}">Low to High</a></li>
					<li><a href="{{ route('shop.index',['category'=>request()->category, 'sort'=> 'high']) }}">High to low</a></li>
					<li><a href="{{ route('shop.index',['category'=>request()->category, 'sort'=> 'atoz']) }}">Name A - Z</a></li>
					<li><a href="{{ route('shop.index',['category'=>request()->category, 'sort'=> 'ztoa']) }}">Name Z - A</a></li>
				</ul>
			</div>
		</div>
		<div class="products text-center">
			@forelse($product as $products)
				<div class="product">
					<a href="{{ route('shop.show', $products->barcode) }}"><img src="{{ $products->url_gambar }}" class="image1"></a>
					<div class="middle">
						<p class="card-text">Some Text</p>
					</div>
					<div class="card-footer invinsible">
						<a href="{{ route('shop.show', $products->barcode) }}">
							<h5>{{ ucwords($products->nama) }}</h5>
							<h6>Rp. {{ number_format($products->harga, 0, '', '.') }}</h6>
						</a>
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

	
</div>
{{-- @include('component.product-list-card') --}}
@include('partials._footer')
<script type="text/javascript" src="{{mix('js/app.js')}} "></script>

</body>
</html>