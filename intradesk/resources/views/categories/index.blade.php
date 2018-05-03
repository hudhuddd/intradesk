@extends('layouts.master')

@section('content')
    <h1><center>Edit Categories</center></h1><a href="/dashboard" class="btn btn-outline-secondary float-right">Go Back</a>
    @if(count($categories) > 0)
        @foreach($categories as $category)
            <div class="well">
                <table class="table table">
                    <tr>
                        <th>{{$category->name}}</th>
                        <th><a href="/categories/{{$category->id}}/edit" class="btn btn-secondary float-right">Edit</a></th>
                    </tr>
                </table>
            </div>
        @endforeach
    @else
        <p>No categories found.</p>
    @endif
@endsection


