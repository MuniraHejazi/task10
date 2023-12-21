@extends('layouts.app')
@section('title', 'edit')
@section('content')

<div class="card" style="margin: 100px;">
    <div class="card-body">
        <h1 class="card-title">edit posts</h1>
       
        </div>
          
        <form action="{{route('posts.update'), $post->$id}} ", method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">title</label>
            <input type="email" class="form-control"  name="title" value="{{$post->title}}">
          </div>
        
          <div class="form-floating">
            <textarea class="form-control" name="description" id="floatingTextarea"required>{{$post->description}}</textarea>
            <label for="floatingTextarea">Comments:</label>
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">image</label>
            <input class="form-control"name="image" type="file" id="formFile">
           @if ($post->image)
               <img src="{{asset('images/'.$post->image)}}" alt="post Image">
           @endif
        </div>
          <button type="submit" class="btn btn-primary">ubdate post</button>
          <a href="{{route('posts.index')}}" class="btn btn-primary btn-lg disabled" >cancel</a>
        </form>
    </div>
  </div>
  @endsection
