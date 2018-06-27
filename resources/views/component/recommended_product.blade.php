<div class="bg-faded py-2">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h3>You Might Like ...</h3><br>
				<div class="card-deck">
					@foreach ($product as $products)
						<div class="card invinsible mb-3">
						<a href="{{ route('shop.show', $products->barcode) }}"><img src="{{ asset($products->url_gambar) }}" class="image2"></a>
						<div class="middle">
							<div class="text1">
								{{ $products->nama }}
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
		
	</div>
</div>
