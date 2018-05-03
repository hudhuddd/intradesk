@extends('layouts.master')

@section('content')
    <a href="/" class="btn btn-outline-secondary">Go Back</a>
    <h1>{{$resource->title}}</h1>
    <h4>{{$resource->link}}</h4>
    <small>Created on {{$resource->created_at}}</small>
    <hr>
    <a href="/resources/{{$resource->id}}/edit" class="btn btn-secondary">Edit</a>


    {!!Form::open(['action' => ['ResourcesController@destroy', $resource->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection