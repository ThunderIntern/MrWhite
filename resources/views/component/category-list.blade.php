<section>
<div class="bg-faded py-5">
	<div class="container">
		<div class="row">
			<div class="centeredmenu border-awsm">
				<h1>Some Category</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="card-deck">
					@foreach ($category as $categories)
						<div class="card invinsible text-dark col-6 col-md">
							<a href="{{ route('shop.index') }}"><img src="/image/waterbased.jpg" class="image"></a>
							<div class="middle">
								<p class="card-text">Some Text</p>
							</div>
							<div class="card-footer bg-transparent">
								{{ $categories->name }}
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>
</section>