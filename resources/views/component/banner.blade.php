<section class="py-5">
	@if ($count>0)
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="card invinsible">
					<a href="{{ $banner->url_link }}" target="_blank"><img src="{{ URL::to('image/',$banner->url_gambar) }}" class="image3"></a>
				</div>
			</div>
		</div>
<<<<<<< HEAD

	</div>
</section>
=======
	</div>
	@else{
		<div>
		</div>
	}
	@endif
		
</section>
>>>>>>> 232b61c82dab656bea50bd9e05551d4c53cf64fd
