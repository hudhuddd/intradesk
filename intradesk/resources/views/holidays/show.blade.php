@extends('layouts.master')

@section('content')
    <p>&nbsp</p>

    @if(!Auth::guest())
        {!!Form::open(['action' => ['HolidaysController@destroy', $holiday->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
    @endif
    <p>&nbsp</p>

    <h1>{{$holiday->name}}</h1>
    <h4>{{$holiday->month}} {{$holiday->day}}</h4>
    <hr>

    <a href="/holidays" class="btn btn-outline-secondary">Go Back</a>

    @if(!Auth::guest())
        <a href="/employees/{{$holiday->id}}/edit" class="btn btn-secondary float-right">Edit</a>
    @endif
@endsection