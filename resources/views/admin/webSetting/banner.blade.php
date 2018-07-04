@extends('admin.part.layout', ['title'=>'Katalog'])
@section('content')
<div class="main-panel">
@component('admin/part/navbar')
  @slot('header')
    Data Produk
  @endslot
@endcomponent

<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header card-header-primary card-header-icon">
						<div class="card-icon">
							<a data-toggle="modal" href="#tambah" class="btn-link btn-just-icon" title="tambah"><i class="material-icons">add</i></a>
						</div>
						<h4 class="card-title">Banner Setting</h4>
						<div>
							<div class="card-body">
								<div class="material-datatables">
									<table class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
										<thead class="thead-dark">
											<tr>
												<th>ID</th>
												<th>Nama</th>
												<th>Gambar</th>
												<th>Show Date</th>
												<th>Off Date</th>
												<th class="text-center">Action</th>
											</tr>
										</thead>
										<tbody style="color: #000;">
											@foreach ($banner as $banners)
											<tr>
												<td>{{ $banners->id }}</td>
												<td>{{ $banners->name }}</td>
												<td><img src="{{ asset($banners->url_gambar) }}" style="width: 8rem;"></td>
												<td>{{ $banners->date_show }}</td>
												<td>{{ $banners->date_off }}</td>
												<td>
													<div class='btn-group d-flex justify-content-center' role='group' aria-label='...'>
														<a data-toggle="modal" href="#edit" class="btn btn-link btn-success btn-just-icon" title="edit"><i class="material-icons">edit</i></a>
														<a data-toggle="modal" href="#" class="show-modal btn btn-link btn-info btn-just-icon" title="lihat" @include('admin.part.data_banner')><i class="material-icons">remove_red_eye</i></a>
														<button type="button" id="delete" class="btn btn-link btn-danger btn-just-icon"><i class="material-icons" title="delete">delete</i></button>
													</div>
												</td>
												</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div><!--  end card  -->
			</div> <!-- end col-md-12 -->
		</div> <!-- end row -->
	</div>
</div>
<!-- Modal tambah -->
<div class="modal fade" id="tambah" role="dialog">
	<div class="modal-dialog modal-lg">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Tambah Produk</h4>
			</div>
			<div class="modal-body">
				<form method="post" class="form-horizontal" action="{{ route('admin.store') }}">
					{{ csrf_field() }}
					<div class="row">
						<label class="col-sm-2 col-form-label" style="display:block;text-align:right;">
							Nama Banner
						</label>
						<div class="col-sm-10">
							<div class="form-group">
								<input type="text" class="form-control" name="name">
								<span class="bmd-help">A block of help text that breaks onto a new line.</span>
							</div>
						</div>
						<label class="col-sm-2 col-form-label" style="display:block;text-align:right;">
							Gambar
						</label>
						<div class="col-sm-10">
							<div class="form-group">
								<input type="text" class="form-control" name="url_gambar">
								<span class="bmd-help">A block of help text that breaks onto a new line.</span>
							</div>
						</div>
						<label class="col-sm-2 col-form-label" style="display:block;text-align:right;">
							Show Date
						</label>
						<div class="col-sm-10">
							<div class="form-group">
								<input type="date" class="form-control" name="date_show">
								<span class="bmd-help">A block of help text that breaks onto a new line.</span>
							</div>
						</div>
						<label class="col-sm-2 col-form-label" style="display:block;text-align:right;">
							Off Date
						</label>
						<div class="col-sm-10">
							<div class="form-group">
								<input type="date" class="form-control" name="date_off">
								<span class="bmd-help">A block of help text that breaks onto a new line.</span>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Add</button>
					<button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
				</div>
			</div>
		</form>
	</div>
</div>

<!-- Modal Show -->

<div class="modal fade" id="show" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Banner</h4>
      </div>
      <div class="modal-body">
        <div class="row">
        <div class="col-sm-3">
          <img id=banner_pic src = "" width=150px />
        </div>
        <div class="col-sm-9">
          <div class="row">
            <p class="col-sm-3">ID</p>
            <p class="col-sm-1">:</p>
            <b class="col-sm-8" id=banner_id></b>
          </div>
          
          <div class="row">
            <p class="col-sm-3">Nama</p>
            <p class="col-sm-1">:</p>
            <b class="text-capitalize col-sm-8" id=banner_name></b>
          </div>
         <div class="row">
            <p class="col-sm-3">Show Date</p>
            <p class="col-sm-1">:</p>
            <b class="col-sm-8" id=tampil></b>
          </div>
          <div class="row">
            <p class="col-sm-3">Off Date </p>
            <p class="col-sm-1">:</p>
            <b class="col-sm-8" id=sudah></b>
          </div>
          
        </div>
      </div>
      </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Edit</button>
          <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
        </div>
      </div>
  </div>
</div>

@stop
