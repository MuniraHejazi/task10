@extends('layouts.app')
@section('title', 'creat')
@section('content')

<div class="card" style="margin: 100px;">
    <div class="card-body">
        <h1 class="card-title">Create posts</h1>
        @if ($errors->any())
        <div class="div">>
           <ul>
         @foreach ($errors ->all() as $error)
             <li>   {{$error}}</li>
        @endforeach

            </ul>

        </div>
          
        @endif
        <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">title</label>
            <input type="email" class="form-control" name="title" required >
          </div>
        
          <div class="form-floating">
            <textarea class="form-control" name="description" required ></textarea>
            <label for="content">Comments:</label>
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">image</label>
            <input class="form-control"name="image" type="file" id="formFile">
          </div>
          <button type="submit" class="btn btn-primary">create post</button>
        </form>
    </div>
  </div>
  @endsection