@extends('layouts.master')

@section('content')
    <h1>Edit Categories</h1>
    {!! Form::open(['action' => ['CategoriesController@update', $category->id], 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('name', 'Name')}}
        {{Form::text('name', $category->name, ['class' => 'form-control', 'placeholder' => 'Name'])}}

    </div>
    <a href="/categories" class="btn btn-outline-secondary float-left">Go Back</a>

    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Submit', ['class' =>'btn btn-primary float-right'])}}
    {!! Form::close() !!}

@endsection