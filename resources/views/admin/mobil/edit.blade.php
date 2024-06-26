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
            <h3>Edit Mobil</h3><br />
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
            <form class="forms-sample" action="{{ url('/dashboard/mobil/update', $mobil->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <label for="nama" class="col-sm-4 col-form-label">Nama Mobil</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nama" name="nama"
                            placeholder="Nama Mobil" value="{{ $mobil->nama }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="no_polisi" class="col-sm-4 col-form-label">Nomor Polisi</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="no_polisi" name="no_polisi"
                            placeholder="Nomor Polisi" value="{{ $mobil->no_polisi }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="warna" class="col-sm-4 col-form-label">Warna Mobil</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="warna" name="warna"
                            placeholder="Warna Mobil" value="{{ $mobil->warna }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="cc" class="col-sm-4 col-form-label">CC</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="cc" name="cc"
                            placeholder="CC" value="{{ $mobil->cc }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="harga_sewa" class="col-sm-4 col-form-label">Harga Sewa</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="harga_sewa" name="harga_sewa"
                            placeholder="Harga Sewa" value="{{ $mobil->harga_sewa }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="merk_id" class="col-sm-4 col-form-label">Merk ID</label>
                    <div class="col-sm-8">
                        <select name="merk_id" id="merk_id" class="form-control">
                            @foreach($merk as $merk)
                                <option value="{{ $merk->id }}" {{ ($merk->id == $mobil->merk_id) ? 'selected' : '' }}>
                                    {{ $merk->nama }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="gambar" class="col-sm-4 col-form-label">Link Gambar</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="gambar" name="gambar"
                            placeholder="Link Gambar" value="{{ $mobil->gambar }}">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary me-2">Submit</button>
                <button type="reset" class="btn btn-primary me-2">Reset</button>
            </form>
        </div>
    </div>
</div>
@endsection