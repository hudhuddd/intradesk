@extends('layouts.master')

@section('content')
    <h1>
        <center>Go To Places</center>
    </h1>
    <div class="container">
        @php($count = 0)
        <div class="card-deck">
            @foreach ($categories as $category)
                @php($count++)
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">
                            <center>{{$category->name}}</center>
                        </h4>
                        @foreach ($category->resources as $resource)
                            <center>
                            <a class="card-text" href="{{ url($resource->link) }}">{{$resource->title}}</a>

                            @if(!Auth::guest())
                                <a href="/resources/{{$resource->id}}/edit" class="btn btn-secondary btn-sm">Edit</a>
                            @endif
                            </center>
                            <br>
                        @endforeach
                    </div>
                </div>
                @if($count % 3 == 0)
                    </div> <!-- end card-deck -->
                    <p>&nbsp;</p>
                    <div class="card-deck">
                @endif
            @endforeach
        </div>
    </div>
@endsection



