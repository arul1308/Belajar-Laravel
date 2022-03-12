@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center my-4">
        <div class="col-lg-8">
            <article>
                <h2 class="mb-2">{{ $post->tittle }}</h2>
                <a href="/dashboard/posts" class="btn btn-info "><span data-feather="arrow-left"></span> Back to my post</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit-3"></span> Edit</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method=post class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Are You Sure Want to Delete This Post?')"><span data-feather="trash-2"></span> Delete</button>
                  </form>

                @if($post->image)
                <div style = "max-height : 350px; overflow:hidden">
                    <img src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->category->name }}" class="img-fluid mt-2">
                    <article class="my-3 fs-6">
                </div>
                @else
                    <img src="https://source.unsplash.com/1200x500?"{{ $post->category->name }} alt="{{ $post->category->name }}" class="img-fluid mt-2">
                    <article class="my-3 fs-6">
                @endif
                    
                    {!! $post->body !!}
                    
                </article>
            </article>
        </div>
    </div>
</div>
@endsection