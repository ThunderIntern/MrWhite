<section class="bg-faded py-5">
{{-- <div class="bgimg-1">
	<div class="caption">
		<span class="border">Top Brand</span>
	</div>
</div> --}}
<div class="container">
	<div class="row">
		<div class="centeredmenu border-awsm">
			<h1>Top Brand</h1>
		</div>
	</div>
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<div class="row carousel-inner w-100 mx-auto">
			@foreach ($brand as $brands)
			<div class="carousel-item col-md {{ $loop->first ? 'active' : '' }}">
				<div class="card invinsible">
					<a href="{{ route('shop.index', ['brands'=>$brands->name]) }}"><img src="/image/{{ $brands->name }}.jpeg" class="image1"></a>
				</div>
			</div>
			@endforeach
		</div>

		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>
</section>