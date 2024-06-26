@extends('admin.layout.index')
@section('content')
<div class="content-wrapper">
  <div class="page-header">
      <h3 class="page-title">
          <span class="page-title-icon bg-gradient-primary text-black me-3 mr-3">
          <i class="mdi mdi-account-search"></i>
          </span>Perawatan
      </h3>
      <nav aria-label="breadcrumb">
          <ul class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page">
                  <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
              </li>
          </ul>
      </nav>
  </div>
  <div class="row">
      <div class="col-12 grid-margin">
          <div class="card">
              <div class="card-body">
                @if (session('success'))
                <div class="alert alert-success">
                  {{session('success')}}
                </div>
                @endif
                  <h4 class="card-title">Daftar Perawatan</h4>
                  <div class="table-responsive">
                    <table class="table table-bordered text-center">
                      <thead>
                        <tr class="table-success">
                          <th> No </th>
                          <th> Tanggal </th>
                          <th> KM Biaya </th>
                          <th> Biaya </th>
                          <th> Mobil Id </th>
                          <th> Jenis Perawatan Id </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="table-secondary">
                          <td> {{ $perawatan->id}} </td>
                          <td> {{ $perawatan->tanggal}} </td>
                          <td> {{ $perawatan->km_mobil}} </td>
                          <td> {{ $perawatan->biaya}} </td>
                          <td> {{ $perawatan->mobil_id}} </td>
                          <td> {{ $perawatan->jenis_perawatan_id}} </td>
                      </tbody>
                    </table>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection