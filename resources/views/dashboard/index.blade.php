@extends('dashboard.layouts.main')

@section('container')

    {{-- <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Welcome back, {{ auth()->user()->name }}</h1>
    </div> --}}
    <div class="main">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Welcome back, {{ auth()->user()->name }}</h5>
                <p class="mb-0">Have a Good day ! </p>
            </div>
        </div>
    </div>
    
            
@endsection
