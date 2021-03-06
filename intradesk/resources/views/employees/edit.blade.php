@extends('layouts.master')

@section('content')
    <h1>Edit {{$employee->firstName}} {{$employee->lastName}}</h1>
    {!! Form::open(['action' => ['EmployeesController@update', $employee->id], 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('firstName', 'First Name')}}
        {{Form::text('firstName', $employee->firstName, ['class' => 'form-control', 'placeholder' => 'First Name'])}}

        {{Form::label('lastName', 'Last Name')}}
        {{Form::text('lastName', $employee->lastName, ['class' => 'form-control', 'placeholder' => 'Last Name'])}}

        {{Form::label('email', 'Email')}}
        {{Form::text('email', $employee->email, ['class' => 'form-control', 'placeholder' => 'Email'])}}

        {{Form::label('ext', 'Ext')}}
        {{Form::number('ext', $employee->ext, ['min' => 0, 'class' => 'form-control', 'placeholder' => 'Ext'])}}

        {{Form::label('department', 'Department')}}
        {{Form::text('department', $employee->department, ['min' => 0, 'class' => 'form-control', 'placeholder' => 'Department'])}}

        {{Form::label('cell', 'Cell')}}
        {{Form::text('cell', $employee->cell, ['min' => 0, 'class' => 'form-control', 'placeholder' => 'Cell'])}}

        {{Form::label('birthmonth', 'Birth Month')}}
        {{Form::text('birthday', $employee->birthmonth, ['min' => 0, 'class' => 'form-control', 'placeholder' => 'Birth Month'])}}

        {{Form::label('birthday', 'Birth Day')}}
        {{Form::number('birthday', $employee->birthday, ['min' => 0, 'class' => 'form-control', 'placeholder' => 'Birth Day'])}}

        {{Form::label('license', 'License')}}
        {{Form::text('license', $employee->license, ['min' => 0, 'class' => 'form-control', 'placeholder' => 'License'])}}

    </div>
    <a href="/employees" class="btn btn-outline-secondary float-left">Go Back</a>

    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Submit', ['class' =>'btn btn-primary float-right'])}}
    {!! Form::close() !!}

@endsection