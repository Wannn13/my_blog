@extends('layouts.main')

@section('container')

    <style>
        button .btn-login:hover{
            color: #fff !important;
            background: #5D87FF !important;
        }
    </style>
    
    <div class="container mt-5 mb-5 pb-5">

        @if(session('success'))
            <div class="d-flex justify-content-center">
                <div class="alert alert-success alert-dismissible fade show mb-5" role="alert">
                    <strong>{{ session('success') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        @endif

        @if(session('loginError'))
            <div class="d-flex justify-content-center">
                <div class="alert alert-danger alert-dismissible fade show mb-5" role="alert">
                    <strong>{{ session('loginError') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        @endif
        
        <div class="row justify-content-center">
            <div class="col-lg-4 rounded-5 login pt-5 pb-5">
                
                <main class="form-signin w-100 m-auto">
                    <form action="/login" method="post">
                    @csrf
                        <h1 class="h3 mb-3 fw-bold text-center mb-4 text-dark">Login</h1>
                    
                        <div class="form-floating mb-4">
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                            <label for="email"> Email</label>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                            <label for="password" required> Password</label>
                        </div>

                        <button class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2" type="submit">Login</button>

                        <small>Not Registered? <a href="/register"> Register Now</a></small>
                    </form>
                </main>
            </div>
        </div>
        
      </div>
    </div>

    {{-- <div
    class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
    <div class="d-flex align-items-center justify-content-center w-100">
      <div class="row justify-content-center w-100">
        <div class="col-md-8 col-lg-6 col-xxl-3">
          <div class="card mb-0">
            <div class="card-body">
              <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                <img src="../assets/images/logos/dark-logo.svg" width="180" alt="">
              </a>
              <p class="text-center">Your Social Campaigns</p>
              <form>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Username</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-4">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="d-flex align-items-center justify-content-between mb-4">
                  <div class="form-check">
                    <input class="form-check-input primary" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label text-dark" for="flexCheckChecked">
                      Remeber this Device
                    </label>
                  </div>
                  <a class="text-primary fw-bold" href="./index.html">Forgot Password ?</a>
                </div>
                <a href="./index.html" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Sign In</a>
                <div class="d-flex align-items-center justify-content-center">
                  <p class="fs-4 mb-0 fw-bold">New to Modernize?</p>
                  <a class="text-primary fw-bold ms-2" href="./authentication-register.html">Create an account</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}

@endsection