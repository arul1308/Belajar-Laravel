@extends('layout.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <article>
                    <h2 class="mb-2">{{ $post->tittle }}</h2>
                    <h6 class="mb-4">By <a href="/author/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }} </a>Genre <a href = "/blog?category={{ $post->category->slug }}"> {{ $post->category->name }}</a></h6>
                    @if($post->image)
                        <div style = "max-height : 350px; overflow:hidden">
                        <img src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">                    
                        </div>
                    @else
                        <img src="https://source.unsplash.com/1200x500?"{{ $post->category->name }} alt="{{ $post->category->name }}" class="img-fluid mt-2">
                        <article class="my-3 fs-6">
                    @endif
                    <article class="my-3 fs-6">
                        
                        {!! $post->body !!}
                        
                    </article>
                </article>
                <a href="/blog">Back to Blog</a> 
            </div>
        </div>
    </div>
@endsection

