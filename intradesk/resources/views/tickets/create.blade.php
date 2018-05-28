@extends('layouts.master')

@section('content')
    <h1>Create Ticket</h1>
    {!! Form::open(['action' => 'TicketsController@store', 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}

        {{Form::label('client_id', 'Client ID')}}
        {{Form::number('client_id', '', ['min' => 0, 'class' => 'form-control', 'placeholder' => 'Company ID'])}}

        {{Form::label('email', 'Email')}}
        {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Email'])}}

        {{Form::label('urgency', 'Urgency')}}
        {{Form::select('urgency', ['Informational', 'Low', 'Medium', 'High', 'Emergency'], null, ['class' => 'form-control'])}}

        {{Form::label('message', 'Message')}}
        {{Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Message'])}}

    </div>
    {{Form::submit('Submit', ['class' =>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection

