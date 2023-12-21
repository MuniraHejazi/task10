@extends('layouts.app')
@section('title', 'show ')
@section('content')
<div class="card" style="margin: 100px;">
    <div class="card-body">
        <h1 class="card-title">{{$post->title}}</h1>
        <p>{{$post->description }}</p>
        
        @if ($post->image)
        <img src="{{asset('images/'.$post->image)}}" alt="post Image">
       @endif 
      
          <a href="{{route('posts.index')}}" class="btn btn-primary btn-lg disabled" >cancel</a>
      
    </div>
  </div>

@endsection