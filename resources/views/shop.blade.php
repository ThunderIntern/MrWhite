<!DOCTYPE html>
<html>
<head>
	<title>Mr. White</title>
	<link rel="stylesheet" type="text/css" href="{{mix('css/app.css')}}">
</head>
<body>
@include('partials._topbar')
{{-- @include('partials._sidebar') --}}
<div class="products-section container">
	<div class="sidebar">
		<h3>By Category</h3>
		<ul>
			<a href="{{ route('shop.index')}}">All Product</a>
			<h5>Category</h5>
				@foreach ($categories as $category)
					<li><a href="{{ route('shop.index', ['category'=>$category->name]) }}">{{ $category->name }}</a></li>
				@endforeach
			<h5>Brand</h5>
				@foreach ($brand as $brands)
					<li><a href="{{ route('shop.index', ['brands'=>$brands->name]) }}">{{ $brands->name }}</a></li>
				@endforeach
		</ul>
	</div> {{-- end of sidebar --}}
	<div>
		<div class="products-header">
			<h1> {{ $category_name }}</h1>
			<div>
				<strong>Price:</strong>
				<a href="{{ route('shop.index',['category'=>request()->category, 'sort'=> 'low']) }}">Low to High</a>
				<a href="{{ route('shop.index',['category'=>request()->category, 'sort'=> 'high']) }}">High to low</a>
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
						{{ $products->nama }}
						<h6>{{ $products->harga }}</h6>
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