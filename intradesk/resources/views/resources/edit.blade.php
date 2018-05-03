@extends('layouts.master')

@section('content')
    <h1>Edit {{$resource->title}}</h1>
    {!! Form::open(['action' => ['ResourcesController@update', $resource->id], 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', $resource->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}

        {{Form::label('link', 'Link')}}
        {{Form::text('link', $resource->link, ['class' => 'form-control', 'placeholder' => 'Link'])}}

        {{Form::label('category_id', 'Category Id')}}
        {{Form::text('category_id', $resource->category_id, ['class' => 'form-control', 'placeholder' => 'Category Id'])}}

    </div>
    <a href="/resources" class="btn btn-outline-secondary float-left">Go Back</a>
    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Submit', ['class' =>'btn btn-primary float-right'])}}
    {!! Form::close() !!}

@endsection