@extends('layouts.master')

@section('content')
    <h1>{{$title}}</h1>
    @if(count($directory) > 0)
        <ul class ="list-group">
        @foreach($directory as $person)
            <li class="list-group-item">{{$person}}</li>
        @endforeach
        </ul>
    @endif
@endsection


