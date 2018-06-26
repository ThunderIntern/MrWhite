<section>
	<div class="container-fluid site-main">
		<div class="row">
			@foreach ($product as $products)
				<div class="col-sm-3">
					<div class="card-deck">
						<div class="card invinsible d-lg-none d-none d-lg-block ">
						</div>
						<div class="card invinsible text-dark ">
							<a href="{{ route('shop.show', $products->barcode) }}"><img src="{{ $products->url_gambar }}" class="image1"></a>
							<div class="middle">
								<p class="card-text">Some Text</p>
							</div>
							<div class="card-footer invinsible">
								{{ $products->barcode }}
							</div>
						</div>
						
					</div>
				</div>
			@endforeach
		</div>
	</div>	
</section>