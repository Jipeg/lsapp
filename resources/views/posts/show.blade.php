@extends('layouts/app', ['title' => $post ? $post->title : 'Not found'])
@section('content')
<a class="btn btn-default" href="/posts">Go back</a>
    @if($post)
    <div class="card">
        <h2 class="card-title">{{$post->title}}</h2>
        <div class="card-body">{!!$post->body!!}</div>
        <hr>
        <small>Written on {{$post->created_at}}</small>
    </div>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Change post</a>
    {!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST']) !!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!! Form::close() !!}
    @else
    <div class="card">
        No posts with such id found! 
    </div>
    @endif
@endsection
