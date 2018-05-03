@extends('layouts.master')

@section('content')
    <h1>Create Resource</h1>
    {!! Form::open(['action' => 'ResourcesController@store', 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}

        {{Form::label('link', 'Link')}}
        {{Form::text('link', '', ['class' => 'form-control', 'placeholder' => 'Link'])}}

        {{Form::label('category_id', 'Category Id')}}
        {{Form::text('category_id', '', ['class' => 'form-control', 'placeholder' => 'category_id'])}}

    </div>
    {{Form::submit('Submit', ['class' =>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection