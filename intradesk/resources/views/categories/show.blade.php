@extends('layouts.master')

@section('content')
    <a href="/categories" class="btn btn-outline-secondary">Go Back</a>
    <h1>{{$category->name}}</h1>
    <small>Created on {{$category->created_at}}</small>

@endsection