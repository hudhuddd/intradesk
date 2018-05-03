@extends('layouts.master')

@section('content')
    <h1>Create Category</h1>
    {!! Form::open(['action' => 'CategoriesController@store', 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('name', 'Name')}}
        {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name'])}}

    </div>
    {{Form::submit('Submit', ['class' =>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection