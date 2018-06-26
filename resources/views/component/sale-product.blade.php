<section>
<div class="bg-faded py-2">
	<div class="container">
		<div class="row">
			<div class="centeredmenu border-awsm">
				<h1>Best Offer</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="card-deck">
					
					@foreach($catalog as $catalogs)
					<div class="card invinsible text-dark col-md col-sm col-xs-6">
						<img src="{{ $catalogs->url_gambar }}" class="image1">
						<div class="middle">
							<p class="card-text">{{ $catalogs->deskripsi }}</p>
						</div>
						<div class="card-footer text-white text-center bg-danger">
							<h4>{{ $catalogs->barcode }}</h4>
							<h6>{{ $catalogs->harga }}</h6>
						</div>
					</div>
					@endforeach

				</div>
			</div>
		</div>
	</div>
</div>
</section>