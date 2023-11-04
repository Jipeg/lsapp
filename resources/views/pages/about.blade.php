@extends('layouts/app')

@section('content')
    This is the about page!
    @if(count($partners) > 0)
    <ul>
        @foreach($partners as $partner)
            <li>{{$partner}}</li>
        @endforeach
    </ul>
    @endif
@endsection