@extends('layout.app')

@section('konten')

    <div class="site-section">
      <div class="container">

        <div class="row mb-5 ">
          <div class="col-md-7 text-center mx-auto">
            <!-- <span class="subtitle-39293">My Works</span> -->
            <h2 class="serif">Login sebagai admin</h2>
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
                  @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif
                  <form method="post" action="{{ route('store-login')}}">
                    @csrf
                    <div class="form-group"> 
                      <label>username</label>
                      <input type="text" class="form-control" name="nama" id="nama"/>
                    </div>
                    <div class="form-group">
                      <label>password</label>
                      <input type="password" class="form-control" name="password" id="password"/>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                  </form>
                </div>
                <a href="{{ route('register')}}" class="btn btn-primary" type="submit">Register</a>
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
