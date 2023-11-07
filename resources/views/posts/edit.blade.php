@extends('layouts/app', ['title' => "Edit post $post->id"])

@section('content')
{!! Form::open(['action' => ['App\Http\Controllers\PostsController@update', $post->id], 'method' => 'POST']) !!}
<div class="form">
    {!! Form::label('title', 'Title') !!}
    {!! Form::text('title', $post->title, ['class' => 'form-control']) !!}
    {!! Form::label('body', 'Text body') !!}
    {!! Form::textarea('body', $post->body, ['class' => 'form-control']) !!}
    {!! Form::hidden('_method', 'PUT') !!}
    {!! Form::submit('Save changes!') !!}
</div>


{!! Form::close() !!}
@endsection