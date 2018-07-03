@extends('admin.part.layout', ['title'=>'Produk Baru'])
@section('content')
<div class="main-panel">
@component('admin/part/navbar')
  @slot('header')
    Produk Baru
  @endslot
@endcomponent
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card ">
          <div class="card-header card-header-rose card-header-text">
            <div class="card-text">
              <h4 class="card-title">Produk Baru</h4>
            </div>
          </div>
          <div class="card-body ">
            <form method="get" action="/" class="form-horizontal">
              <div class="row">
                <label class="col-sm-2 col-form-label">Nama Produk</label>
                <div class="col-sm-10">
                  <div class="form-group">
                    <input type="text" class="form-control">
                    <span class="bmd-help">*Wajib diisi</span>
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                  <div class="form-group">
                    <input type="password" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label">Placeholder</label>
                <div class="col-sm-10">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="placeholder">
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label">Disabled</label>
                <div class="col-sm-10">
                  <div class="form-group">
                    <input type="text" class="form-control" value="Disabled input here.." disabled>
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label">Static control</label>
                <div class="col-sm-10">
                  <div class="form-group">
                    <p class="form-control-static"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a3cbc6cfcfcce3c0d1c6c2d7cad5c68ed7cace8dc0ccce">[email&#160;protected]</a></p>
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label label-checkbox">Checkboxes and radios</label>
                <div class="col-sm-10 checkbox-radios">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" value=""> First Checkbox
                      <span class="form-check-sign">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" value=""> Second Checkbox
                      <span class="form-check-sign">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="exampleRadios" value="option2" checked> First Radio
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="exampleRadios" value="option1"> Second Radio
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label label-checkbox">Inline checkboxes</label>
                <div class="col-sm-10 checkbox-radios">
                  <div class="form-check form-check-inline">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" value=""> a
                      <span class="form-check-sign">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" value=""> b
                      <span class="form-check-sign">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" value=""> c
                      <span class="form-check-sign">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@stop
