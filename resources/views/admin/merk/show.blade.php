@extends('admin.layout.index')
@section('content')
<div class="content-wrapper">
  <div class="page-header">
      <h3 class="page-title">
          <span class="page-title-icon bg-gradient-primary text-black me-3 mr-3">
          <i class="mdi mdi-library"></i>
          </span>Merk
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
                <meta http-equiv="refresh" content="3;url=/dashboard/merk">
                @endif
                  <h4 class="card-title">Daftar Merk</h4>
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr class="table-success">
                          <th> No </th>
                          <th> Nama </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="table-secondary">
                          <td> {{ $merk->id}} </td>
                          <td> {{ $merk->nama}} </td>
                      </tbody>
                    </table>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection