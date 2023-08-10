@extends('dashboard.layouts.main')

@section('container')

<style>
    p{
        text-align: justify !important;
    }
    /* .btn{
        width: 40px;
        height: 40px;
        border-radius: 10px;
        padding-top: 7px !important;
    } */
    .btn-dark{
        margin-right: 80%;
    }
</style>

<div class="container">
    <div class="row justify-content-start my-3">
        <div class="col-lg-11 mt-5 pt-5">
            <div class="btn-action mt-3 mb-4">
                <a href="/dashboard/posts" class="btn btn-sm btn-dark"><i class="ti ti-chevron-left" style="margin-right:5px "></i> Back</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-sm btn-warning mx-3 text-light">Edit</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-sm btn-danger border-0" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </div>
            <h2>{{ $post->title }}</h2>

            @if($post->image)
            <div style="max-height: 400px; overflow: hidden; border-radius: 0 0 10px 10px;">
                <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid mb-3 rounded-3" alt="{{ $post->category->name }}">
            </div>
            @else
                <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" class="img-fluid mb-3 mt-3 rounded-3" alt="{{ $post->category->name }}">
            @endif
    
            <p>{!! $post->body !!}</p>

            {{-- <div class="text-center">
                <a href="/posts" class="btn btn-danger py-1 px-4 mt-4">Show more</a>
            </div> --}}
        </div>
    </div>
</div>

@endsection
