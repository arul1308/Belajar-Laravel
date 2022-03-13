@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"> Post Genre </h1>
</div>

@if(session()->has('success'))
  <div class="alert alert-success col-lg-6" role="alert">
    {{ session('success') }}
  </div>
@endif

<div class="table-responsive col-lg-6">
    <a href="/dashboard/genre/create" class="btn btn-primary"> Create New Genre </a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Genre Name</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($genres as $genre)
          <tr>
            <td>{{ $loop-> iteration }}</td>
            <td>{{ $genre -> name }}</td>
            <td>
                <a href="/dashboard/genre/{{ $genre->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
                <a href="/dashboard/genre/{{ $genre->slug }}/edit" class="badge bg-warning"><span data-feather="edit-3"></span></a>
                <form action="/dashboard/genre/{{ $genre->slug }}" method=post class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="badge bg-danger border-0" onclick="return confirm('Are You Sure Want to Delete This Post?')"><span data-feather="trash-2"></span></button>
                </form>
            </td>
          </tr>              
          @endforeach
      </tbody>
    </table>
  </div>

@endsection