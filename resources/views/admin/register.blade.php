@extends('layout.app')

@section('konten')

<div class="site-section">
  <div class="container">

    <div class="row mb-5 ">
      <div class="col-md-7 text-center mx-auto">
        <!-- <span class="subtitle-39293">My Works</span> -->
        <h2 class="serif">Register</h2>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="post-entry-1 h-100">
              <!-- <a href="{{ route('index')}}">
                <img src="{{ asset ('capture/images/img_1.jpg')}}" alt="Image"
                class="img-fluid">
              </a> -->
              <div class="post-entry-1-contents">
              </div>
              <!-- <a href="{{ route('detail-paket')}}"  class="btn btn-primary" type="submit">Beli Paket</a> -->
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="post-entry-1 h-100">
              <a href="{{ route('index')}}">
                <!-- <img src="{{ asset ('capture/images/img_2.jpg')}}" alt="Image"
                  class="img-fluid"> -->
                </a>
                <div class="post-entry-1-contents">
                  @if ($errors->any())
                  <div class="alert alert-danger">
                    <ul>
                      @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div><br/>
                  @endif
                  <form method="post" action="{{ route('store-register')}}">
                    @csrf
                    <div class="form-group"> 
                      <label>Username</label>
                      <input type="text" class="form-control" name="nama" id="nama"/>
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" class="form-control" name="email" id="email"/>
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" class="form-control" name="password" id="password"/>
                    </div>
                    <div class="form-group">
                      <label>Confirm Password</label>
                      <input type="password" class="form-control" name="password_confirmation" id="password_confirmation"/>
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                  </form>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="post-entry-1 h-100">
                <div class="post-entry-1-contents">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> 
      <!-- END .site-section -->
      @endsection


      