@extends('layouts.main')

@section('container')

    <style>
        .input-search .form-control{
        border-radius: 2rem 0 0 2rem !important;
        }
        .input-search input::-webkit-input-placeholder{
            padding: 10px !important;
            color: rgba(0, 0, 0, .3) !important;
        }
        .input-search .btn{
            border-radius: 0 20px 20px 0;
        }
        h4{
            color: #5D87FF;
            padding-top: 1.3rem;    
        }
        .pagination .page-item a{ 
            color: #5D87FF !important;
        }
        li.page-item .active {
            border:none;
            color: #fff !important;
        }
        span.page-link{
            background: #5D87FF !important;
            border: none;
        }
        li.page-item.disabled span.page-link{
            color: #5D87FF !important;
            background: #eaeaea !important;
        }
        p{
            text-align: justify !important;
        }
    </style>

    <div class="row justify-content-between header mb-3">
    <div class="col-md-8">
        <h4 class="px-1">{{ $title }}</h4>
    </div>
        <div class="col-md-4">
            <form action="/posts">

                @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
                @endif

                @if (request('author'))
                <input type="hidden" name="author" value="{{ request('author') }}">
                @endif

                <div class="input-group pt-3 input-search">
                    <input type="text" class="form-control" placeholder="Search . . ." name="search" value="{{ request('search') }}">
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    @if ($posts->count())
        <div class="card mb-3 rounded-4">
            @if($posts[0]->image)
            <div style="max-height: 400px; overflow: hidden;">
                <img src="{{ asset('storage/' . $posts[0]->image) }}" class="img-fluid mb-3 rounded-3" alt="{{ $posts[0]->category->name }}">
            </div>
            @else
                <img src="https://source.unsplash.com/1200x400/?{{ $posts[0]->category->name }}" class="card-img-top img-hero" style="border-radius: 1rem 1rem 0 0;" alt="{{ $posts[0]->category->name }}">
            @endif
            <div class="card-body p-5">
                <h3 class="card-title">{{ $posts[0]->title }}</h3>
                <p>
                    <small class="text-body-secondary">By <a href="/posts?author={{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> in <a href="/posts?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }} </small>
                </p>
                
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a href="posts/{{ $posts[0]->slug }}" class="btn btn-sm btn-primary rounded-4 px-4 py-1">Read more</a>
            </div>
      </div>
    

    <div class="container mt-4 d-flex p-0 justify-content-center">
        <div class="row">
            @foreach($posts->skip(1) as $post)
                <div class="col-md-4 mb-3">
                    <div class="card rounded-4">
                        <a href="/posts?category={{ $post->category->slug }}"><small class="position-absolute text-white px-4 py-2" style="background-color: rgba(0, 0, 0, 0.5); border-radius: 1rem 0 1rem 0; color: #fff !important;">{{ $post->category->name }}</small></a>
                        @if($post->image)
                            <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" style="border-radius: 1rem 1rem 0 0;" alt="{{ $post->category->name }}">
                        @else
                            <img src="https://source.unsplash.com/500x400/?{{ $post->category->name }}" class="card-img-top img-card-small" style="border-radius: 1rem 1rem 0 0;" alt="{{ $post->category->name }}">
                        @endif
                        <div class="card-body p-4">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p>
                            <small class="text-body-secondary">By <a href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }} </small>
                        </p>
                        <p class="card-text">{{ $post->excerpt }}</p>
                        <a href="posts/{{ $post->slug }}" class="btn btn-sm btn-primary rounded-4 px-4 py-1">Read more</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    @else
        <p class="text-center fs-4">No Post Found.</p>
    @endif

    <div class="d-flex justify-content-center mt-5">
        {{ $posts->links() }}
    </div>

@endsection