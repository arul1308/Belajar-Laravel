@extends('layout.main')

@section('container')
{{-- ini looping --}}
<h1> {{ $tittle }} </h1>

    @if ($posts->count())
        <div class="card mb-3">
            <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
            <div class="card-body text-center">
            <h5 class="card-title"><a href="/blog/{{ $posts[0]->slug }}" class = "text-decoration-none text-black">{{ $posts[0]->tittle }}</a></h5>
            <p>
                <small class="text-muted">
                By <a href="/author/{{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> Genre : <a href = "/categories/{{ $posts[0]->category->slug }}" class="text-decoration-none"> {{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans()}}
                </small>
            </p>
            <p class="card-text">{{ $posts[0]->excerpt }}</p>
            <a href="/blog/{{ $posts[0]->slug }}"class="text-decoration-none btn btn-primary">Read More</a>
            </div>
        </div>
    @else
        <p class="text-center fs-4"> No Post Found</p>
    @endif

    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $posts)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="position-absolute bg-blue p-3 text-white" style="background-color: rgba(0,0,0,0.3)">
                        <a href="/categories/{{ $posts->category->slug }}" class="text-white text-decoration-none">{{ $posts->category->name }}</a>
                    </div>
                    <img src="https://source.unsplash.com/500x300?{{ $posts->category }}" class="card-img-top" alt="{{ $posts->category->name }}">
                    <div class="card-body">
                      <h5 class="card-title">{{ $posts->tittle }}</h5>
                      <p>
                        <small class="text-muted">
                        By <a href="/author/{{ $posts->author->username }}" class="text-decoration-none">{{ $posts->author->name }}</a> {{ $posts->created_at->diffForHumans()}}
                        </small>
                      </p>
                      <p class="card-text">{{ $posts->excerpt }}</p>
                      <a href="/blog/{{ $posts->slug }}" class="btn btn-primary">Read more</a>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>


    @foreach ($posts->skip(1) as $post)

    <article class ="mb-5 border-bottom pb-3">
    <h2><a href="/blog/{{ $post->slug }}" class="text-decoration-none">{{ $post->tittle }}</a></h2>
    <p>By <a href="/author/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> Genre : <a href = "/categories/{{ $post->category->slug }}" class="text-decoration-none"> {{ $post->category->name }}</a></p>
    <p>{{ $post->excerpt }}</p>

    <a href="/blog/{{ $post->slug }}"class="text-decoration-none">Read More...</a>
    </article>

    @endforeach

@endsection