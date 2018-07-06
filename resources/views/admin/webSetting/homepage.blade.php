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
            <div class="row">
              <div class="col-md-6">
    						<div class="card-icon">
    							<i class="material-icons">assignment</i>
    						</div>
    						<h4 class="card-title">Home Page</h4>
              </div>
              <div class="col-md-6 text-right">
                <form method="post" class="form-horizontal" action="{{ route('homepage.update','test') }}">
                  {{ csrf_field() }}
                  {{method_field('patch')}}
                <button class="btn btn-info btn-round" onclick="location.href='{{ route('preview')}}'">
                  <i class="material-icons">remove_red_eye</i> Preview
                </button>
                <button class="btn btn-success btn-round">
                  <i class="material-icons">save</i> save
                </button>
              </div>
            </div>
						<div>
							<div class="card-body">
								<div class="material-datatables">
									<table id="dataProduk" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
										<thead class="thead-dark">
											<tr>
												<th>ID</th>
												<th>Jenis</th>
												<th>Isi</th>
												<th>Urutan</th>
											</tr>
										</thead>
										<tbody id="row_position" style="color: #000;">
											@foreach ($setting as $settings)
												<tr id="{{ $settings->id }}">
													<td>{{ $settings->id }}</td>
													<td>{{ $settings->jenis }}</td>
													<td>{{ $settings->isi }}</td>
                            <input type="text" name="id" value="{{ $settings->id }}">
														<td><input type="text" name="sort_hp" placeholder="{{ $settings->position }}"></td>
												</tr>
											@endforeach
										</tbody>
									</table>
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


@stop
