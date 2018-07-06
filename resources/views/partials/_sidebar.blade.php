<div class="sidebar d-none d-xs-none d-sm-none d-md-block d-lg-block">
	<h3>By Category</h3>
	<ul class="pl-0">
		<a href="{{ route('shop.index')}}">All Product</a>
		<h5>Category</h5>
		<div class="dropdown-btn">
			@foreach ($categories as $category)
			<li ">
				<a href="{{ route('shop.index', ['category'=>$category->name]) }}">{{ ucwords($category->name) }}</a>
			</li>
			@endforeach
		</div>

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
		{{-- <div data-role="main" class="ui-content">
			<form>
				<div data-role="rangeslider" class="form-group">
					<label for="price-min">Price:</label>
					<input type="range" name="price-min" class="form-control-range" id="price-min" value="0" min="0" max="1000000">
					<label for="price-max">Price:</label>
					<input type="range" name="price-max" class="form-control-range" id="price-max" value="900000" min="0" max="1000000">
				</div>
				<input type="submit" data-inline="true" value="Submit">
			</form>
		</div> --}}
		
	</ul>
</div> {{-- end of sidebar --}}