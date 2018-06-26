<section class="bg-faded">
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
							<img src="/image/crew.jpeg" class="image2">
							<div class="middle">
								<p class="card-text">{{ $brands->name }}</p>
							</div>
						</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>
</section>