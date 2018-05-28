@extends('layouts.master')

@section('content')
    <h1><center>Tickets</center></h1>
    <div class="container">
        <a href="/tickets/create" class="btn btn-primary float-right">New Ticket</a>

        <table class="table table-striped">
            <tr>
                <th>Ticket Title</th>
                <th>Email</th>
                <th>Urgency</th>
                <th>Message</th>
            </tr>
            @foreach($tickets as $ticket)
                <tr>
                    <th>{{$ticket->title}}</th>
                    <th>{{$ticket->email}}</th>
                    <th>{{$ticket->urgency}}</th>
                    <th>{{$ticket->message}}</th>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
