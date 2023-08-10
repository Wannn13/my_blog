@extends('layouts.main')

@section('container')
<h4 class="mb-4 text-center">Post Categories</h4>

<div class="container justify-content-between p-0">
    <div class="row">
        @foreach ($categories as $category)
            <div class="col-md-4">
                <a href="/posts?category={{ $category->slug }}">
                    <div class="card text-bg-dark border-0 mb-4">
                        <img src="https://source.unsplash.com/500x300/?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
                        <div class="card-img-overlay p-5">
                            <h5 class="card-title text-center py-2 rounded-5 categories" style=" border-top: 100px #000; margin-top: 40%;">{{ $category->name }}</h5>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>

@endsection