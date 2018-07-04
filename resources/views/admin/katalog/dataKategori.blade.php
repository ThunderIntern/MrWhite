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
                                <a data-toggle="modal" href="#modal-show" class="show-modal btn btn-link btn-info btn-just-icon" title="lihat"><i class="material-icons">remove_red_eye</i></a>
                                <a data-toggle="modal" href="#edit" class="btn btn-link btn-success btn-just-icon" title="edit"><i class="material-icons">edit</i></a>
                                <button type="button" id="delete" class="btn btn-link btn-danger btn-just-icon"><i class="material-icons" title="delete">delete</i></button>
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
                                <a data-toggle="modal" href="#modal-show" class="show-modal btn btn-link btn-info btn-just-icon" title="lihat"><i class="material-icons">remove_red_eye</i></a>
                                <a data-toggle="modal" href="#edit" class="btn btn-link btn-success btn-just-icon" title="edit"><i class="material-icons">edit</i></a>
                                <button type="button" id="delete" class="btn btn-link btn-danger btn-just-icon"><i class="material-icons" title="delete">delete</i></button>
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
                                <a data-toggle="modal" href="#modal-show" class="show-modal btn btn-link btn-info btn-just-icon" title="lihat"><i class="material-icons">remove_red_eye</i></a>
                                <a data-toggle="modal" href="#edit" class="btn btn-link btn-success btn-just-icon" title="edit"><i class="material-icons">edit</i></a>
                                <button type="button" id="delete" class="btn btn-link btn-danger btn-just-icon"><i class="material-icons" title="delete">delete</i></button>
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
                                <a data-toggle="modal" href="#modal-show" class="show-modal btn btn-link btn-info btn-just-icon" title="lihat"><i class="material-icons">remove_red_eye</i></a>
                                <a data-toggle="modal" href="#edit" class="btn btn-link btn-success btn-just-icon" title="edit"><i class="material-icons">edit</i></a>
                                <button type="button" id="delete" class="btn btn-link btn-danger btn-just-icon"><i class="material-icons" title="delete">delete</i></button>
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
      </div>
    </div>
  </div>


@stop
