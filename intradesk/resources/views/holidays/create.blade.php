@extends('layouts.master')

@section('content')
    <h1>Add Holiday</h1>
    {!! Form::open(['action' => 'HolidaysController@store', 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('name', 'Name')}}
        {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name'])}}

        {{Form::label('month', 'Month')}}
        {{Form::text('month', '', ['class' => 'form-control', 'placeholder' => 'Month'])}}

        {{Form::label('day', 'Day')}}
        {{Form::number('day', '', ['min' => 0, 'class' => 'form-control', 'placeholder' => 'Day'])}}

    </div>
    {{Form::submit('Submit', ['class' =>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection