<section class="bg-faded py-5">
<div class="bgimg-1">
	<div class="caption">
		<span class="border">Top Brand</span>
	</div>
</div>
<div>
	<div class="container">
		<div class="row">
			@foreach ($brand as $brands)
			<div class="col-md-4">
				<div class="card-deck">
						<div class="card invinsible text-dark col-lg col-md col-sm col-xs ">
							<a href="{{ route('shop.index', ['brands'=>$brands->name]) }}"><img src="/image/{{ $brands->name }}.jpeg" class="image2"></a>
						</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>
</section>