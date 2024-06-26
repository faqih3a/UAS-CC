@extends('admin.layout.index')
@section('content')
<div class="content-wrapper">
  <div class="page-header">
      <h3 class="page-title">
          <span class="page-title-icon bg-gradient-primary text-black me-3 mr-3">
          <i class="mdi mdi-rename-box"></i>
          </span>Sewa
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
                  @if(session('success'))
                    <div class="alert alert-success">
                      {{ session('success')}}
                    </div>
                    <script>
                      setTimeout(function() {
                          $('.alert').fadeOut('slow');
                      }, 4000);
                    </script>
                  @endif
                  <h4 class="card-title">Daftar Sewa</h4>
                  <div class="table-responsive">
                    <table class="table table-bordered text-center">
                      <thead>
                        <tr class="table-success">
                          <th> No </th>
                          <th> Tanggal Mulai </th>
                          <th> Tanggal Akhir </th>
                          <th> Tujuan </th>
                          <th> Mobil Id </th>
                          <th> Nama Customer </th>
                          <th> No Ktp </th>
                          <th> Action </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($sewa as $sewa)
                            
                        <tr class="table-secondary">
                            <td> {{ $loop->iteration}} </td>
                            <td> {{ $sewa->tanggal_mulai}} </td>
                            <td> {{ $sewa->tanggal_akhir}} </td>
                            <td> {{ $sewa->tujuan}} </td>
                            <td> {{ $sewa->mobil_id}} </td>
                            <td> {{ $sewa->nama_customer}} </td>
                            <td> {{ $sewa->no_ktp}} </td>
                            <td>
                              <a class="btn btn-info btn-sm" href="{{ url('/dashboard/sewa/show', $sewa->id)}}">View</a>
                              <form action="{{ url('/dashboard/sewa/destroy', $sewa->id)}}" method="post" class="d-inline">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger btn-sm" onclick="return confirmDelete(event)" type="submit">Delete</button>

                              </form>
                            </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection
<script>
  function confirmDelete(event) {
    if(!confirm("Apakah anda yakin ingin menghapus Sewa?")){
      event.preventDefault()
      return false;
    }
  }
</script>