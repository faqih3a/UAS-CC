@extends('admin.layout.index')
@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-black me-3 mr-3">
                <i class="mdi mdi-car"></i>
            </span>Mobil
        </h3>
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
            <h3>Tambah Mobil</h3><br />
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
            <form class="forms-sample" action="{{ url('/dashboard/mobil/store')}}" method="POST">
                @csrf
                <div class="form-group row">
                    <label for="nama" class="col-sm-4 col-form-label">Nama Mobil</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nama" name="nama"
                            placeholder="Nama Mobil">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="no_polisi" class="col-sm-4 col-form-label">No Polisi</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="no_polisi" name="no_polisi"
                            placeholder="No Polisi">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="warna" class="col-sm-4 col-form-label">Warna Mobil</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="warna" name="warna"
                            placeholder="Warna Mobil">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="cc" class="col-sm-4 col-form-label">CC</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="cc" name="cc"
                            placeholder="CC">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="harga_sewa" class="col-sm-4 col-form-label">Harga Sewa</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="harga_sewa" name="harga_sewa"
                            placeholder="Harga Sewa">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="merk_id" class="col-sm-4 col-form-label">Merek ID</label>
                    <div class="col-sm-8">
                        <select name="merk_id" id="merk_id" class="form-control">
                            @foreach ($merk as $merk)
                                <option value="{{ $merk->id }}">{{ $merk->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="gambar" class="col-sm-4 col-form-label">Link Gambar</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="gambar" name="gambar"
                            placeholder="Link Gambar">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary me-2">Submit</button>
                <button type="reset" class="btn btn-primary me-2">Reset</button>
            </form>
        </div>
    </div>  
</div>
@endsection