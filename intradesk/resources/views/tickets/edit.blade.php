@extends('layouts.master')

@section('content')
    <h1>Edit {{$ticket->title}} {{$ticket->id}}</h1>
    {!! Form::open(['action' => ['TicketsController@update', $ticket->id], 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', $ticket->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}

        {{Form::label('client_id', 'Client Id')}}
        {{Form::text('client_id', $ticket->client_id, ['class' => 'form-control', 'placeholder' => 'Client Id'])}}

        {{Form::label('email', 'Email')}}
        {{Form::text('email', $ticket->email, ['class' => 'form-control', 'placeholder' => 'Email'])}}

        {{Form::label('urgency', 'Urgency')}}
        {{Form::number('urgency', $ticket->urgency, ['min' => 0, 'class' => 'form-control', 'placeholder' => 'Urgency'])}}

        {{Form::label('message', 'Message')}}
        {{Form::text('message', $ticket->message, ['min' => 0, 'class' => 'form-control', 'placeholder' => 'Message'])}}

    </div>
    <a href="/employees" class="btn btn-outline-secondary float-left">Go Back</a>

    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Submit', ['class' =>'btn btn-primary float-right'])}}
    {!! Form::close() !!}

@endsection