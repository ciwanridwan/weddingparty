@extends('layout')

@section('konten')
    <div class="ftco-blocks-cover-1">
      <!-- <div class="site-section-cover overlay" style="background-color:grey;"> -->
      <!-- <div class="site-section-cover overlay" style="background-image: url('capture/images/hero_1.jpg')"> -->
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7">
              <!-- <p>Halo, Selamat Datang</p> -->
              <h1 class="mb-3 text-primary"> Terimasih Sudah Registrasi</h1>
              <h3 class="mb-3 text-primary"> Silahkan Transfer Ke No.Rekening 2019488292 A.N Biduanto, DP 30% Sebagai Tanda Jadi.</h3>
              <h3 class="mb-3 text-primary"> Harap Kirim Bukti Ke Nomor WA 081385433322</h3>
              <!-- <p> Semua informasi tentang toko Wedding organizer ada disini, yuk scroll ke bawah ya!</p> -->
              <!-- <p><a type="button" class="btn btn-primary" href="https://api.whatsapp.com/send?phone=6281385433322&text=Hai%20saya%20{$nama}%20ingin%20memesan%20Wedding%20Organizer%20untuk%20tanggal%20{$tanggal}%20dan%20untuk%20{$jumUndangan}%20undangan,%20lokasi%20berada%20di%20alamat%20{$alamat}">Kirim Bukti</a></p> -->
              <p><button type="button" class="btn btn-primary" id="btnWa" value="Whatsapp"> Kirim Bukti </button></p>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
    