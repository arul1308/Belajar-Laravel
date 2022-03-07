@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center my-4">
        <div class="col-lg-8">
            <article>
                <h2 class="mb-2">{{ $post->tittle }}</h2>
                <a href="/dashboard/posts" class="btn btn-info "><span data-feather="arrow-left"></span> Back to my post</a>
                <a href="" class="btn btn-warning"><span data-feather="edit-3"></span> Edit</a>
                <a href="" class="btn btn-danger"><span data-feather="trash-2"></span> Delete</a>
                <img src="https://source.unsplash.com/1200x500?"{{ $post->category->name }} alt="{{ $post->category->name }}" class="img-fluid mt-2">
                <article class="my-3 fs-6">
                    
                    {!! $post->body !!}
                    
                </article>
            </article>
        </div>
    </div>
</div>
@endsection