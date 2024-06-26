@extends('admin.layout.index')
@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-black me-3 mr-3">
                <i class="mdi mdi-account-search"></i>
            </span>Perawatan
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                </li>
            </ul>
        </nav>
    </div>
    <div class="card">
        <div class="card-body">
            <h3>Tambah Perawatan</h3><br />
            {{-- menampilkan error validasi --}}
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <!-- form validasi -->
            <form class="forms-sample" action="{{ url('/dashboard/perawatan/store')}}" method="POST">
                @csrf
                <div class="form-group row">
                    <label for="tanggal" class="col-sm-4 col-form-label">Tanggal Sewa</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" id="tanggal" name="tanggal"
                            placeholder="Tanggal Sewa">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="km_mobil" class="col-sm-4 col-form-label">Km Mobil</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="km_mobil" name="km_mobil"
                            placeholder="Km Mobil">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="biaya" class="col-sm-4 col-form-label">Biaya Sewa</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="biaya" name="biaya"
                            placeholder="Biaya Sewa">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="mobil_id" class="col-sm-4 col-form-label">Mobil ID</label>
                    <div class="col-sm-8">
                        <select name="mobil_id" id="mobil_id" class="form-control">
                            @foreach ($mobil as $mobil)
                                <option value="{{ $mobil->id }}">{{ $mobil->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jenis_perawatan_id" class="col-sm-4 col-form-label">Jenis Perawatan</label>
                    <div class="col-sm-8">
                        <select name="jenis_perawatan_id" id="jenis_perawatan_id" class="form-control">
                            @foreach ($jenis_perawatan as $jenis_perawatan)
                                <option value="{{ $jenis_perawatan->id }}">{{ $jenis_perawatan->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary me-2">Submit</button>
                <button type="reset" class="btn btn-primary me-2">Reset</button>
            </form>
        </div>
    </div>  
</div>
@endsection