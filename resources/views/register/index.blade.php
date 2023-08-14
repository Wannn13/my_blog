@extends('layouts.main')

@section('container')

    {{-- <style>
        .form-control, .form-check-input, .btn-register{
            border: 1px solid #9b9b9b;
            color: rgba(0, 0, 0, 0.5);
            border-radius: 1rem;
        }
        .btn-register:hover{
            border: 1px solid #DC3545;
            color: #fff;
            background-color: #DC3545;;
        }
        .form-floating{
            margin: 20px 0;
        }
        .form-control{
            border-radius: 5rem !important;
            padding: 0;
            width: 100%;
            height: 45px !important;
        }
        input::-webkit-input-placeholder{
            padding: 10px !important;
            color: rgba(0, 0, 0, .3) !important;
        }
        .form-floating label{
            margin-left: 20px;
            color: rgba(0, 0, 0, 0.5);
            padding:9px;
        }
        input{
            padding: 20px 0 0 30px !important;
        }
    </style> --}}

    <div class="row justify-content-center">
        <div class="col-lg-8 rounded-5 login mt-5 pt-5 pb-5">
            
            <main class="form-signin w-100 m-auto">
                <form action="/register" method="post">
                @csrf
                    <h1 class="h3 fw-bolder text-center text-dark mb-5 pb-2">Register</h1>
                
                    <div class="form-floating mb-4">
                        <input type="name" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" required value={{ old('name') }}>
                        <label for="emai">Name</label>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-4">
                        <input type="username" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" required value={{ old('username') }}>
                        <label for="emai">Username</label>
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-4">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="emai" placeholder="Email" required value={{ old('email') }}>
                        <label for="emai">Email address</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-4">
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                        <label for="password">Password</label>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2" type="submit">Register</button>

                    <div class="text-start">
                        <small>Allredy Registered? <a href="/login"> Login</a></small>
                    </div>
                </form>
            </main>
        </div>
    </div>
    
    {{-- <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-5 rounded-4 login pt-5 pb-5">
                <main class="form-registration w-100 m-auto">
                    <form action="/register" method="post">
                    @csrf
                        <h1 class="h3 mb-3 fw-bold text-center mb-5 text-dark">Register</h1>
                    
                        <div class="form-floating">
                            <input type="name" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" required value={{ old('name') }}>
                            <label for="emai">Nama</label>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="username" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" required value={{ old('username') }}>
                            <label for="emai">Username</label>
                            @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="emai" placeholder="Email" required value={{ old('email') }}>
                            <label for="emai">Email address</label>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                            <label for="password">Password</label>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <button class="btn btn-md w-100 py-2 rounded-5 mb-4 mt-4 pt-1 btn-register" type="submit">Register</button>

                        <div class="text-center">
                            <small>Allredy Registered? <a href="/login"> Login</a></small>
                        </div>
                    </form>
                </main>
            </div>
        </div>
    </div> --}}

@endsection