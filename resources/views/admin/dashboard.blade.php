  @extends('admin.part.layout', ['title'=>'Dashboard'])
  @section('content')
  <div class="main-panel">
  @component('admin/part/navbar')
    @slot('header')
      Dashboard
    @endslot
  @endcomponent

  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">business_center</i>
                  </div>
                  <p class="card-category">Jumlah Produk</p>
                  <h3 class="card-title">105.067</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        Jumlah produk yang tersedia
                    </div>
                </div>
            </div>
        </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="card card-stats">
                  <div class="card-header card-header-rose card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">store</i>
                    </div>
                    <p class="card-category">Total Toko</p>
                    <h3 class="card-title">542</h3>
                  </div>
                  <div class="card-footer">
                      <div class="stats">
                          Jumlah toko yang ada
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="card card-stats">
                  <div class="card-header card-header-success card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">store</i>
                    </div>
                    <p class="card-category">Kunjungan Toko</p>
                    <h3 class="card-title">105.067</h3>
                  </div>
                  <div class="card-footer">
                      <div class="stats">
                          Jumlah Kunjungan Link Toko Online
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
    <div class="row">
    <div class="col-lg-5 col-md-6 col-sm-6">
      <div class="card">
          <div class="card-header card-header-icon card-header-info">
            <div class="card-icon">
              <i class="material-icons">timeline</i>
            </div>
            <h4 class="card-title">Coloured Bars Chart
                <small> - Rounded</small>
            </h4>
          </div>
          <div class="card-body">
              @include('admin.part.linechart')
          </div>
      </div>
  </div>
  <div class="col-lg-7 col-md-6 col-sm-6">
    <div class="card">
        <div class="card-header card-header-icon card-header-info">
          <div class="card-icon">
            <i class="material-icons">calendar</i>
          </div>
          <h4 class="card-title">Coloured Bars Chart
              <small> - Rounded</small>
          </h4>
        </div>
        <div class="card-body">
            @include('admin.part.calendar')
        </div>
    </div>
  </div>
</div>
</div>
@stop
