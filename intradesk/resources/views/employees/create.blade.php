@extends('layouts.master')

@section('content')
    <h1>Add Employee</h1>
    {!! Form::open(['action' => 'EmployeesController@store', 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('firstName', 'First Name')}}
        {{Form::text('firstName', '', ['class' => 'form-control', 'placeholder' => 'First Name'])}}

        {{Form::label('lastName', 'Last Name')}}
        {{Form::text('lastName', '', ['class' => 'form-control', 'placeholder' => 'Last Name'])}}

        {{Form::label('email', 'Email')}}
        {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Email'])}}

        {{Form::label('ext', 'Ext')}}
        {{Form::number('ext', '', ['min' => 0, 'class' => 'form-control', 'placeholder' => 'Ext'])}}

        {{Form::label('department', 'Department')}}
        {{Form::text('department', '', ['class' => 'form-control', 'placeholder' => 'Department'])}}

        {{Form::label('cell', 'Cell')}}
        {{Form::text('cell', '', ['class' => 'form-control', 'placeholder' => 'Cell'])}}

        {{Form::label('birthmonth', 'Birth Month')}}
        {{Form::text('birthmonth', '', ['class' => 'form-control', 'placeholder' => 'Birth Month'])}}

        {{Form::label('birthday', 'Birth Day')}}
        {{Form::number('birthday', '', ['min' => 0, 'class' => 'form-control', 'placeholder' => 'Birth Day'])}}

        {{Form::label('license', 'License')}}
        {{Form::text('license', '', ['class' => 'form-control', 'placeholder' => 'License'])}}

    </div>
    {{Form::submit('Submit', ['class' =>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection