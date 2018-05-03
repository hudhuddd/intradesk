@extends('layouts.master')

@section('content')
    <h1><center>Resources</center></h1>
    <div class="container">
        <table class="table table-striped">
            <tr>
                <th>Resource</th>
                <th></th>
                <th></th>
            </tr>
            @foreach($resources as $resource)
                <tr>
                    <th>{{$resource->title}}</th>
                    <th><a href="{{ url($resource->link) }}">{{$resource->link}}</a></th>
                    <th>
                        @if(!Auth::guest())
                        <a href="/resources/{{$resource->id}}/edit" class="btn btn-secondary">Edit</a>
                        @endif
                    </th>
                </tr>
            @endforeach
        </table>
    </div>
@endsection


