@extends('layouts.master')

@section('content')
    <p>&nbsp</p>

    @if(!Auth::guest())
    {!!Form::open(['action' => ['EmployeesController@destroy', $employee->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
    @endif
    <p>&nbsp</p>

    <h1>{{$employee->firstName}} {{$employee->lastName}}</h1>
    <h4>{{$employee->email}}</h4>
    <h4>Department: {{$employee->department}}</h4>
    <h5>Ext: {{$employee->ext}}</h5>
    <hr>

    <a href="/employees" class="btn btn-outline-secondary">Go Back</a>

    @if(!Auth::guest())
        <a href="/employees/{{$employee->id}}/edit" class="btn btn-secondary float-right">Edit</a>
    @endif
@endsection