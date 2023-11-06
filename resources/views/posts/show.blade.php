@extends('layouts/app', ['title' => $post ? $post->title : 'Not found'])
@section('content')
<a class="btn btn-default" href="/posts">Go back</a>
    @if($post)
    <div class="card">
        <h2 class="card-title">{{$post->title}}</h2>
        <div class="card-body">{{$post->body}}</div>
        <hr>
        <small>Written on {{$post->created_at}}</small>
    </div>
    @else
    <div class="card">
        No posts with such id found! 
    </div>
    @endif
@endsection
