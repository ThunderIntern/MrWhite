<div class="bg-faded py-4">
	<div class="container" style="margin-bottom: 0;">
		<div class="col-12">
			<div class="text-center d-lg-none d-none d-lg-block">
				<form class="form-inline">
			      <input class="form-control mr-sm-2" type="search" placeholder="Cari..." style="width: 90%" name="Search">
			      <button class="btn btn-outline-success mu-2 my-sm-0" type="submit">Search</button>
			    </form>
			</div>
			<div class="text-center py-3">
				<div>
					<h2>Category by: . . .</h2>					
				</div>
			</div>
			{{-- hidden navbar --}}
			<nav class="navbar navbar-expand-lg navbar-light bg-light d-none d-md-block d-sm-block d-lg-none">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="navbar-brand">
					<form class="form-inline my-2 my-lg-0" style="width: auto;">
						<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
						<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
					</form>
				</div>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="#">View All Product <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Category</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="#">Water Based</a>
								<a class="dropdown-item" href="#">Oil Based</a>
								<a class="dropdown-item" href="#">Wax/Clay</a>
								
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Brand
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="#">Murray</a>
								<a class="dropdown-item" href="#">LockHart's</a>
								<a class="dropdown-item" href="#">American Crew</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">Something else here</a>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link disabled" href="#">Strong</a>
							<form>
								<div class="form-group">
									<input type="range" class="form-control-range" id="formControlRange" min="1" max="5">
								</div>
							</form>
						</li>
						<li class="nav-item">
							<a class="nav-link disabled" href="#">Shine</a>
							<form>
								<div class="form-group">
									<input type="range" class="form-control-range" id="formControlRange" min="1" max="5">
								</div>
							</form>
						</li>
					</ul>
				</div>
			</nav>

			{{-- sidebar --}}
			<div class="text-right sort-content">
				<div class="dropdown">
					<span>Sort by : </span>
					<a class="dropdown-toggle label-sort" href="#" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">New Product</a>
					<ul class="dropdown-menu" style="text-decoration: none; border:none;">
						<li><a href="#">New Product</a></li>
						<li><a href="#">Price Low to High</a></li>
						<li><a href="#">Price High to Low</a></li>
					</ul>
				</div>
			</div>
			<div class="row d-lg-none d-none d-lg-block">
				<div class="card-deck ">
					<div class="sidenav col-md-3 col-sm-3 ">
					  <h4>Filter</h4><hr>
					  <h4><a href="#">View All Product</a></h4>
					  <button class="dropdown-btn dropdown-toggle">Category</button>
					  <div class="dropdown-container">
						  <form>
						  	<a><input type="checkbox" name="">Water Based Pomade</a>
						  	<a><input type="checkbox" name="">Oil Based Pomade</a>
						  	<a><input type="checkbox" name="">Wax/Clay</a>
						  </form>
					  </div>
					  <button class="dropdown-btn dropdown-toggle">Brand</button>
					  <div class="dropdown-container">
						  <form>
						  	<a><input type="checkbox" name="">Murray</a>
						  	<a><input type="checkbox" name="">LockHart's</a>
						  	<a><input type="checkbox" name="">American Crew</a>
						  	<a><input type="checkbox" name="">Baxter</a>
						  </form>
					  </div>
					  <h4><a href="#">Strong</a></h4>
					  <form>
					  	<div class="form-group">
					  		<input type="range" class="form-control-range" id="formControlRange" min="1" max="5">
					  	</div>
					  </form>
					  <h4><a href="#">Shine</a></h4>
					  <form>
					  		<input type="range" class="form-control-range" id="formControlRange" min="1" max="5">
					  </form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
			

