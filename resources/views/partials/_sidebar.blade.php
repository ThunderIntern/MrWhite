<div class="sidebar">
	<h3>By Category</h3>
	<ul class="pl-0">
		<a href="{{ route('shop.index')}}">All Product</a>
		<h5>Category</h5>
		@foreach ($categories as $category)
		<li>
			<button class="dropdown-btn"><a href="{{ route('shop.index', ['category'=>$category->name]) }}">{{ ucwords($category->name) }}</a></button>
		</li>
		@endforeach

		<h5>Brand</h5>
		<div class="dropdown-btn">
			@foreach ($brand as $brands)
			<li><a href="{{ route('shop.index', ['brands'=>$brands->name]) }}">{{ ucwords($brands->name) }}</a></li>
			@endforeach
		</div>
		<h5>Price</h5>
		<div class="dropdown-btn">
			<li><a href="{{ route('shop.index',['category'=>request()->category, 'price'=> 'under']) }}">Under 50k</a></li>
			<li><a href="{{ route('shop.index',['category'=>request()->category, 'price'=> 'mid']) }}">IDR 50k - 100k</a></li>
			<li><a href="{{ route('shop.index',['category'=>request()->category, 'price'=> 'high']) }}">IDR 100k - 200k</a></li>
			<li><a href="{{ route('shop.index',['category'=>request()->category, 'price'=> 'over']) }}">Above IDR 200k</a></li>
		</div>
	</ul>
</div> {{-- end of sidebar --}}