@extends('layout-success')
@section('konten')
    @if(session()->get('success'))
  <div class="alert alert-success">
    {{ session()->get('success') }}  
  </div><br/>
@endif
<h1>Selamat data berhasil ditambah</h1>
@endsection
