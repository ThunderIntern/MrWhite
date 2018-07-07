@extends('admin.part.layout', ['title'=>'Kategori'])
@section('content')
<div class="main-panel">
@component('admin/part/navbar')
  @slot('header')
    Data Kategori
  @endslot
@endcomponent
<div class="content">
  <div class="container-fluid">
    <div class="row">
      @foreach($jenis as $jeniss)
      <div class="col-md-6">
        <div class="card">
          <div class="card-header card-header-primary card-header-icon">
            <div class="card-icon">
              <i class="material-icons">assignment</i>
            </div>
            <h4 class="card-title">{{ucwords($jeniss->jenis)}}</h4>
          </div>
            <div class="card-body">
              <ul class="nav nav-pills nav-pills-warning" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#{{$jeniss->jenis}}1" role="tablist">
                    Hair
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#{{$jeniss->jenis}}2" role="tablist">
                    Face
                  </a>
                </li>
              </ul>
              <div class="tab-content tab-space">
                <div class="tab-pane active" id="{{$jeniss->jenis}}1">
                  <div class="material-datatables">
                    <table class="table-kategori table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                      <thead class="thead-dark text-center">
                        <tr>
                            <th>
                              {{ucwords($jeniss->jenis)}}
                            </th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @if($jeniss->jenis=="bahan")
                          @foreach($hair_bahan as $hairs)
                          <tr>
                            <td>{{$hairs->name}}</td>
                            <td>
                              <div class='btn-group d-flex justify-content-end' role='group' aria-label='...'>
                                <a data-toggle="modal" href="#edithair" class="edit-hair btn btn-link btn-success btn-just-icon" title="edit" data-name="{{$hairs->name}}" data-id="{{ $hairs->id }}"><i class="material-icons">edit</i></a>
                                <a data-toggle="modal" href="#deletehair" class="delete-hair btn btn-link btn-danger btn-just-icon" title="delete" data-id="{{ $hairs->id }}" data-parent="{{ $hairs->parent_id }}"><i class="material-icons" title="delete">delete</i></button>
                              </div>
                            </td>
                          </tr>
                          @endforeach

                        @elseif($jeniss->jenis=="brand")
                          @foreach($hair_brand as $hairs)
                          <tr>
                            <td>{{$hairs->name}}</td>
                            <td>
                              <div class='btn-group d-flex justify-content-end' role='group' aria-label='...'>
                                <a data-toggle="modal" href="#edithair" class="edit-hair btn btn-link btn-success btn-just-icon" title="edit" data-name="{{$hairs->name}}" data-id="{{ $hairs->id }}"><i class="material-icons" >edit</i></a>
                                <a data-toggle="modal" href="#deletehair" class="delete-hair btn btn-link btn-danger btn-just-icon" title="delete" data-id="{{ $hairs->id }}" data-parent="{{ $hairs->parent_id }}"><i class="material-icons" title="delete">delete</i></button>
                              </div>
                            </td>
                          </tr>
                          @endforeach
                        @endif
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="tab-pane" id="{{$jeniss->jenis}}2">
                  <div class="material-datatables">
                    <table class="table-kategori table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                      <thead class="thead-dark text-center">
                        <tr>
                            <th>
                              {{ucwords($jeniss->jenis)}}
                            </th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @if($jeniss->jenis=="bahan")
                          @foreach($face_bahan as $hairs)
                          <tr>
                            <td>{{$hairs->name}}</td>
                            <td>
                              <div class='btn-group d-flex justify-content-end' role='group' aria-label='...'>
                                <a data-toggle="modal" href="#editface" class="edit-face btn btn-link btn-success btn-just-icon" title="edit" data-name="{{ $hairs->name }}" data-id="{{ $hairs->id }}"><i class="material-icons">edit</i></a>
                                <a data-toggle="modal" href="#deleteface" class="delete-face btn btn-link btn-danger btn-just-icon" title="delete" data-id="{{ $hairs->id }}" data-parent="{{ $hairs->parent_id }}"><i class="material-icons" title="delete">delete</i></button>
                              </div>
                            </td>
                          </tr>
                          @endforeach
                        @elseif($jeniss->jenis=="brand")
                          @foreach($face_brand as $hairs)
                          <tr>
                            <td>{{$hairs->name}}</td>
                            <td>
                              <div class='btn-group d-flex justify-content-end' role='group' aria-label='...'>
                                <a data-toggle="modal" href="#editface" class="edit-face btn btn-link btn-success btn-just-icon" title="edit" data-name="{{$hairs->name}}" data-id="{{ $hairs->id }}"><i class="material-icons">edit</i></a>
                                <a data-toggle="modal" href="#deleteface" class="delete-face btn btn-link btn-danger btn-just-icon" title="delete" data-id="{{ $hairs->id }}" data-parent="{{ $hairs->parent_id }}"><i class="material-icons" title="delete">delete</i></button>
                              </div>
                            </td>
                          </tr>
                          @endforeach
                        @endif
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        <div class="col-sm-12 text-center">
          <button data-toggle="modal" href="#tambahhair" class="btn btn-info btn-round" title="tambah">
            <i class="material-icons">add</i> Hair
          </button>
          <button data-toggle="modal" href="#tambahface" class="btn btn-info btn-round" title="tambah">
            <i class="material-icons">add</i> Face
          </button>
        </div>
      </div>
    </div>
  </div>


  <div class="modal fade" id="tambahhair" role="dialog">
  	<div class="modal-dialog modal-lg">
  		<!-- Modal content-->
  		<div class="modal-content">
  			<div class="modal-header">
  				<button type="button" class="close" data-dismiss="modal">&times;</button>
  				<h4 class="modal-title">Tambah Kategori</h4>
  			</div>
  			<div class="modal-body">
  				<form method="post" class="form-horizontal" action="{{ route('category.store') }}" enctype="multipart/form-data">
  					{{ csrf_field() }}
  					<div class="row">
  						<label class="col-sm-2 col-form-label" style="display:block;text-align:right;">
  							Jenis
  						</label>
  						<div class="col-sm-10">
                <select name="jenis" class="selectpicker" data-size="7" data-style="select-with-transition" title="Single Select">
                  <option disabled selected>Pilih salah satu</option>
                  @foreach($jenis as $jeniss)
                    <option value="{{$jeniss->jenis}}">{{ ucwords($jeniss->jenis) }}</option>
                  @endforeach
                </select>
  						</div>
            </div>
            <div class="row">
              <label class="col-sm-2 col-form-label" style="display:block;text-align:right;">
  							Nama
  						</label>
              <div class="col-sm-10">
                <div class="form-group">
                  <input type="text" class="form-control" name="nama">
                  <span class="bmd-help">*Wajib diisi</span>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 text-center">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input perawatan" type="radio" name="perawatan" value="1" checked>Hair
                  <span class="circle">
                    <span class="check"></span>
                  </span>
                </label>
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

  <div class="modal fade" id="tambahface" role="dialog">
  	<div class="modal-dialog modal-lg">
  		<!-- Modal content-->
  		<div class="modal-content">
  			<div class="modal-header">
  				<button type="button" class="close" data-dismiss="modal">&times;</button>
  				<h4 class="modal-title">Tambah Kategori</h4>
  			</div>
  			<div class="modal-body">
  				<form method="post" class="form-horizontal" action="{{ route('category.store') }}" enctype="multipart/form-data">
  					{{ csrf_field() }}
  					<div class="row">
  						<label class="col-sm-2 col-form-label" style="display:block;text-align:right;">
  							Jenis
  						</label>
  						<div class="col-sm-10">
                <select name="jenis" class="selectpicker" data-size="7" data-style="select-with-transition" title="Single Select">
                  <option disabled selected>Pilih salah satu</option>
                  @foreach($jenis as $jeniss)
                    <option value="{{$jeniss->jenis}}">{{ ucwords($jeniss->jenis) }}</option>
                  @endforeach
                </select>
  						</div>
            </div>
            <div class="row">
              <label class="col-sm-2 col-form-label" style="display:block;text-align:right;">
  							Nama
  						</label>
              <div class="col-sm-10">
                <div class="form-group">
                  <input type="text" class="form-control" name="nama">
                  <span class="bmd-help">*Wajib diisi</span>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 text-center">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input perawatan" type="radio" name="perawatan" value="2" checked>Face
                  <span class="circle">
                    <span class="check"></span>
                  </span>
                </label>
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

  <!-- Edit Show -->
  <div class="modal fade" id="editface" role="dialog">
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Kategori</h4>
        </div>
        <div class="modal-body">
          <form method="post" class="form-horizontal" action="{{ route('category.update','test') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{method_field('patch')}}
            <div class="row">
              <label class="col-sm-2 col-form-label" style="display:block;text-align:right;">
                ID
              </label>
              <div class="col-sm-10">
                <div class="form-group">
                  <input type="text" class="form-control" name="idface" id="idface">
                  <span class="bmd-help">*Wajib diisi</span>
                </div>
              </div>
            </div>
            <div class="row">
              <label class="col-sm-2 col-form-label" style="display:block;text-align:right;">
                Jenis
              </label>
              <div class="col-sm-10">
                <select name="jenis" class="selectpicker" data-size="7" data-style="select-with-transition" title="Single Select">
                  <option disabled selected>Pilih salah satu</option>
                  @foreach($jenis as $jeniss)
                    <option value="{{$jeniss->jenis}}">{{ ucwords($jeniss->jenis) }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="row">
              <label class="col-sm-2 col-form-label" style="display:block;text-align:right;">
                Nama
              </label>
              <div class="col-sm-10">
                <div class="form-group">
                  <input type="text" class="form-control" name="nama" id="namaface">
                  <span class="bmd-help">*Wajib diisi</span>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 text-center">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input perawatan" type="radio" name="perawatan" value="2" checked>Face
                  <span class="circle">
                    <span class="check"></span>
                  </span>
                </label>
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

  <div class="modal fade" id="edithair" role="dialog">
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Kategori</h4>
        </div>
        <div class="modal-body">
          <form method="post" class="form-horizontal" action="{{ route('category.update','test') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{method_field('patch')}}
            <div class="row">
              <label class="col-sm-2 col-form-label" style="display:block;text-align:right;">
                ID
              </label>
              <div class="col-sm-10">
                <div class="form-group">
                  <input type="text" class="form-control" name="idhair" id="idhair">
                  <span class="bmd-help">*Wajib diisi</span>
                </div>
              </div>
            </div>
            <div class="row">
              <label class="col-sm-2 col-form-label" style="display:block;text-align:right;">
                Jenis
              </label>
              <div class="col-sm-10">
                <select name="jenis" class="selectpicker" data-size="7" data-style="select-with-transition" title="Single Select">
                  <option disabled selected>Pilih salah satu</option>
                  @foreach($jenis as $jeniss)
                    <option value="{{$jeniss->jenis}}">{{ ucwords($jeniss->jenis) }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="row">
              <label class="col-sm-2 col-form-label" style="display:block;text-align:right;">
                Nama
              </label>
              <div class="col-sm-10">
                <div class="form-group">
                  <input type="text" class="form-control" name="nama" id="namahair">
                  <span class="bmd-help">*Wajib diisi</span>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 text-center">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input perawatan" type="radio" name="perawatan" value="1" checked>Hair
                  <span class="circle">
                    <span class="check"></span>
                  </span>
                </label>
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

  <!-- Modal Delete -->
  <div class="modal modal-danger fade" id="deletehair" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
        </div>
        <form action="{{route('category.destroy','test')}}" method="post">
        		{{method_field('delete')}}
        		{{csrf_field()}}
  	      <div class="modal-body">
  				<p class="text-center">
  					Are you sure you want to delete this?
  				</p>
  	      		<input type="hidden" name="hairid" id="hairid">
              <input type="hidden" name="hairperawatan" id="hairperawatan">

  	      </div>
  	      <div class="modal-footer">
  	        <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancel</button>
  	        <button type="submit" class="btn btn-warning">Yes, Delete</button>
  	      </div>
        </form>
      </div>
    </div>
  </div>

  <div class="modal modal-danger fade" id="deleteface" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
        </div>
        <form action="{{route('category.destroy','test')}}" method="post">
        		{{method_field('delete')}}
        		{{csrf_field()}}
  	      <div class="modal-body">
  				<p class="text-center">
  					Are you sure you want to delete this?
  				</p>
  	      		<input type="hidden" name="faceid" id="faceid">
              <input type="hidden" name="faceperawatan" id="faceperawatan">

  	      </div>
  	      <div class="modal-footer">
  	        <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancel</button>
  	        <button type="submit" class="btn btn-warning">Yes, Delete</button>
  	      </div>
        </form>
      </div>
    </div>
  </div>


@stop
