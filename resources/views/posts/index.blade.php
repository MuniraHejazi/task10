@extends('layouts.app')
@section('title', 'Home Page')
@section('content')

<div class="container-lg">
   
  
    @forelse ($posts as $post)
 <div class="row">
 <div class="col-md-4">
    <div class="card">
         @if ($post->image)
       <img src="{{asset('images/'.$post->image)}}" alt="post image"> 
       @endif
        <div class="card-body">
          <h5 class="card-title">{{$post->title}}</h5>
          <p class="card-text">{{$post->description }}</p>
          <div class="mt-2">
            <a href="{{route('posts.show',$post->id)}}" class="btn btn-primary btn-lg disabled" >view</a>
            <a href="{{route('posts.edit',$post->id)}}" class="btn btn-primary btn-lg disabled" >edit</a>
            <form action="{{route('posts.destroy',$post->id)}}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-dark" onclick="return confirm('are you sure want to delete posts ')">Delete</button>
            </form>
        

   
   
@empty
<h2>no post</h2>
@endforelse
</div>
      </div>
    </div>
   </div>
      </div>
      @endsection