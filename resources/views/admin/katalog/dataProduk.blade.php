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
                <i class="material-icons">assignment</i>
              </div>
              <h4 class="card-title">Data Produk</h4>
            </div>
              <div class="card-body">
                <div class="material-datatables">
                  <table id="dataProduk" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                    <thead class="thead-dark">
                      <tr>
                        <th>Barcode</th>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Gambar</th>
                        <th>Tersedia Di</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($product as $products)
                      <tr>
                        <td>{{$products->barcode}}</td>
                        <td>{{$products->nama}}</td>
                        <td>{{ $products->harga }}</td>
                        <td><img src="{{ URL::to($products->url_gambar) }}"width=100px/></td>
                        <td>{{$products->tag}}</td>
                        <td>
                          <div class='btn-group' role='group' aria-label='...'>
                            <a data-toggle="modal" href="#edit" class="btn btn-link btn-info btn-just-icon" title="lihat"><i class="material-icons">remove_red_eye</i></a>
                            <a data-toggle="modal" href="#edit" class="btn btn-link btn-success btn-just-icon" title="edit"><i class="material-icons">edit</i></a>
                            <button type="button" id="delete" class="btn btn-link btn-danger btn-just-icon"><i class="material-icons" title="delete">delete</i></button>
                          </div>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  </div>
              </div><!-- end content-->
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
