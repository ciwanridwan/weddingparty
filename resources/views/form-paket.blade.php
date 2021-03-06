@extends('layout')

@section('konten')
<div class="card uper">
  <div class="card-header">
    <h1> Form Pendaftaran </h1>
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br/>
    @endif
      <form method="post" action="{{ route('store') }}">
        @csrf
          <div class="form-group"> 
              <label>Nama Lengkap</label>
              <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap"/>
          </div>
          <div class="form-group">
              <label>Jumlah Undangan</label>
              <input type="numeric" class="form-control" name="jumlah_undangan" id="jumlah_undangan"/>
          </div>
          <div class="form-group">
              <label>Tempat Acara</label>
              <input type="text" class="form-control" name="tempat_acara" id="tempat_acara"/>
          </div>
          <div class="form-group">
              <label>Tanggal Resepsi</label>
              <input type="date" class="form-control" name="tanggal_resepsi" id="tanggal_resepsi"/>
          </div>
          <div class="form-group">
              <label>Alamat Rumah</label>
              <input type="address" class="form-control" name="alamat_rumah" id="alamat_rumah"/>
          </div>
          <div class="form-group">
              <label>Kendala</label>
              <textarea rows="5" cols="40" type="text" class="form-control" name="kendala" id="kendala"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Tambah Data</button>
      </form>
  </div>
</div> 
@endsection
