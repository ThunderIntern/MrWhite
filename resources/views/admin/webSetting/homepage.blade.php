@extends('admin.part.layout', ['title'=>'Web Setting'])
@section('content')
<div class="main-panel">
@component('admin/part/navbar')
  @slot('header')
    Home Page
  @endslot
@endcomponent

<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header card-header-primary card-header-icon">
						<div class="card-icon">
							<i class="material-icons">assignment</i>
						</div>
						<h4 class="card-title">Home Page</h4>
						<div>
							<div class="card-body">
								<div class="material-datatables">
									<table id="dataProduk" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
										<thead class="thead-dark">
											<tr>
												<th>ID</th>
												<th>Jenis</th>
												<th>Isi</th>
<<<<<<< HEAD
                        <th>Action</th>
=======
												<th>Urutan</th>
>>>>>>> 9b30e0a5209871a2b0c622fdc5a21b7b32068388
											</tr>
										</thead>
										<tbody id="row_position" style="color: #000;">
											@foreach ($setting as $settings)
												<tr id="{{ $settings->id }}">
													<td>{{ $settings->id }}</td>
													<td>{{ $settings->jenis }}</td>
													<td>{{ $settings->isi }}</td>
<<<<<<< HEAD
                          <td>
                            <div class='btn-group' role='group' aria-label='...'>
                              <a data-toggle="modal" href="#" class="show-modal btn btn-link btn-info btn-just-icon" title="preview"><i class="material-icons">remove_red_eye</i></a>
                              <div class="togglebutton">
                                <label>
                                  <input type="checkbox" checked="">
                                  <span class="toggle"></span>
                                  
                                </label>
                              </div>
                            </div>
                          </td>
=======
													<form action="#">
														<td><input type="" name="" value="" placeholder="{{ $settings->position }}"></td>
													
>>>>>>> 9b30e0a5209871a2b0c622fdc5a21b7b32068388
												</tr>
											@endforeach
										</tbody>
									</table>
									<input type="button" name="Submit" placeholder="Submit">Submit
									</form>
								</div>
							</div>
						</div>
					</div>
				</div><!--  end card  -->
			</div> <!-- end col-md-12 -->
		</div> <!-- end row -->
		


		
	</div>
</div>
<!-- Modal Edit -->
<div class="modal fade" id="edit" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Produk</h4>
      </div>
      <div class="modal-body">
      <form method="post" class="form-horizontal" action="/">
        <div class="row">
          <label class="col-sm-2 col-form-label" style="display:block;text-align:right;">ID Produk</label>
          <div class="col-sm-10">
            <div class="form-group">
                <input type="text" class="form-control">
                <span class="bmd-help">A block of help text that breaks onto a new line.</span>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Edit</button>
          <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </form>
  </div>
</div>

@stop
