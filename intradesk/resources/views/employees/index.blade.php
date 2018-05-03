@extends('layouts.master')

@section('content')
    <h1>Directory</h1>
    @if(count($employees) > 0)
        <ul class ="list-group">
        @foreach($employees as $employee)
            <div class="well">
                <li class="list-group-item">
                    <h3><a href="/employees/{{$employee->id}}"> {{$employee->firstName}} {{$employee->lastName}}</a></h3>
                    <h6>
                        @if(!Auth::guest())
                        <a href="/employees/{{$employee->id}}/edit" class="btn btn-secondary float-right">Edit</a>
                        @endif
                    </h6>
                    <h5>{{$employee->email}}</h5>
                    <h6>Ext: {{$employee->ext}}</h6>
                </li>
            </div>
        @endforeach
        </ul>
    @else
        <p>No categories found.</p>
    @endif
@endsection
