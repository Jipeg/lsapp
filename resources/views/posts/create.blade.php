@extends('layouts/app', ['title' => 'Create new post'])

@section('content')
    {!! Form::open(['action' => 'App\Http\Controllers\PostsController@store', 'method' => 'POST']) !!}
    <div class="form">
        {!! Form::label('title', 'Title') !!}
        {!! Form::text('title', '', ['class' => 'form-control',  'placeholder'=>'title']) !!}
        {!! Form::label('body', 'Text body') !!}
        {!! Form::textarea('body', '', ['class' => 'form-control', 'id' => 'article-ckeditor', 'placeholder'=>'Text body']) !!}
        {!! Form::submit('Click Me!') !!}
    </div>
    {!! Form::close() !!}
@endsection

