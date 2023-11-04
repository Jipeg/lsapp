@extends('layouts/app')

@section('content')
    This is the service page!
    @if(count($services) > 0)
    <ul>
        @foreach($services as $service)
            <li>{{$service}}</li>
        @endforeach
    </ul>
    @endif
@endsection