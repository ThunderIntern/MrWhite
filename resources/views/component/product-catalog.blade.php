<div class="bg-faded py-5">
	<div class="container">
		<div class="row">
			<div class="centeredmenu border-awsm">
				<h1>Our Product</h1>
				<ul class="list-inline ">
				  {{-- <li class="list-inline-item"><a href="#">Pomade</a></li> --}}
				  {{-- <li class="list-inline-item"><a href="#">Shave Gel</a></li>
				  <li class="list-inline-item"><a href="#">Perfume</a></li> --}}
				</ul>
			</div>
		</div>
		<div class="row">
			@foreach($product as $products)
			<div class="col-sm-3">
				<div class="card-deck">

					<div class="card text-dark invinsible ">
						<a href="{{ route('shop.show', $products->barcode) }}"><img src="{{ $products->url_gambar }}" class="image1"></a>
						<div class="middle">
							<p class="card-text">{{ $products->barcode }}</p>
						</div>
						<div class="card-footer bg-transparent">
							{{ $products->nama }}
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
		<div class="text-center">
		    <a href="{{ route('shop.index') }}" class="btn btn-awsm">View more</a>
		</div>
	</div>
</div>