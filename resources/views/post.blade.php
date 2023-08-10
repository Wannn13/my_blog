@extends('layouts.main')

@section('container')
    <style>
        p{
            text-align: justify !important;
        }
        p .body{
            text-align: justify !important;
        }
    </style>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <h2>{{ $post->title }}</h2>

                <p class="author">By  <a href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/post?category={{ $post->category->slug }}">{{ $post->category->name }}</p></a>

                @if($post->image)
                <div style="max-height: 400px; overflow: hidden; border-radius: 0 0 10px 10px;">
                    <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid mb-3 rounded-3" alt="{{ $post->category->name }}">
                </div>
                @else
                    <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" class="img-fluid mb-3 rounded-3" alt="{{ $post->category->name }}">
                @endif
                        
                <p class="body">{!! $post->body !!}</p>

                <div class="text-center">
                    <a href="/posts" class="btn btn-danger rounded-5 py-1 px-4 mt-5 mb-5">Show more</a>
                </div>
            </div>
        </div>
    </div>
    
@endsection
