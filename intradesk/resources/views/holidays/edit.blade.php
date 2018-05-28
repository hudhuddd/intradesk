@extends('layouts.master')

@section('content')
    <h1>Edit {{$holiday->name}}</h1>
    {!! Form::open(['action' => ['HolidaysController@update', $holiday->id], 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('name', 'Name')}}
        {{Form::text('name', $holiday->name, ['class' => 'form-control', 'placeholder' => 'Name'])}}

        {{Form::label('month', 'Month')}}
        {{Form::text('month', $holiday->month, ['class' => 'form-control', 'placeholder' => 'Month'])}}

        {{Form::label('day', 'Day')}}
        {{Form::number('day', $holiday->day, ['min' => 0, 'class' => 'form-control', 'placeholder' => 'Day'])}}

    </div>
    <a href="/holidays" class="btn btn-outline-secondary float-left">Go Back</a>

    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Submit', ['class' =>'btn btn-primary float-right'])}}
    {!! Form::close() !!}

@endsection