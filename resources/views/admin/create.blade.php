@extends('layout.admin')

@section('content')
<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Product</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <form action="{{ route('toko.create') }}" method="post" enctype="multipart/form-data" >
                @csrf
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Tambah Produk</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Nama Toko</label>
                                    <input type="text" name="nama_toko" class="form-control" value="{{ old('nama_toko') }}" required>
                                    <p class="text-danger">{{ $errors->first('nama_toko') }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi Toko</label>
                                    <textarea name="deskripsi" id="deskripsi" class="form-control">{{ old('deskripsi') }}</textarea>
                                    <p class="text-danger">{{ $errors->first('deskripsi') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                
                                <div class="form-group">
                                    <label for="lokasi">Alamat / Lokasi</label>
                                    <input type="text" name="lokasi" class="form-control" value="{{ old('lokasi') }}" required>
                                    <p class="text-danger">{{ $errors->first('lokasi') }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="jumlah_paket">Jumlah Paket</label>
                                    <input type="number" name="jumlah_paket" class="form-control" value="{{ old('jumlah_paket') }}" required>
                                    <p class="text-danger">{{ $errors->first('jumlah_paket') }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="logo_toko">Logo Toko</label>
                                    <input type="file" name="logo_toko" class="form-control" value="{{ old('logo_toko') }}" required>
                                    <p class="text-danger">{{ $errors->first('logo_toko') }}</p>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-sm">Tambah</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection