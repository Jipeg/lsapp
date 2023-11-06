@extends('layouts/app', ['title' => 'Posts'])

@section('content')
    @if (count($posts) > 0)
        @foreach($posts as $post) 
            <div class="card mb-3">
                <h2 class="card-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h2>
                <small>{{$post->created_at}}</small>
            </div>
        @endforeach

        {{$posts->links()}}
    @else
        no posts
    @endif
@endsection