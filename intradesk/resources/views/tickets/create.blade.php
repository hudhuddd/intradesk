@extends('layouts.master')

@section('content')
    <h1>Create Ticket</h1>

    @if (Session::has('flash_message'))
        <div class="alert alert-success">{{ Session::get('flash_message') }}</div>
    @endif
    <form method="post" action="{{route('tickets.store')}}">
        {{csrf_field()}}

        <div class="form-group">
            <label>Title: </label>
            <input type="text" class='form-control' name="title">
            @if ($errors->has('title'))
                <small class="form-text invalid-feedback">{{ $errors->first('title') }}</small>
            @endif
        </div>

        <div class="form-group">
            <label>Email: </label>
            <input type="text" class='form-control' name="email">
        </div>

        <div class="form-group">
            <label>Urgency: </label>
            <select class="form-control" name="urgency">
                <option>Informational</option>
                <option>Low</option>
                <option>Medium</option>
                <option>High</option>
                <option>Emergency</option>
            </select>
        </div>

        <div class="form-group">
            <label>Message: </label>
            <textarea class='form-control' name="message"></textarea>
        </div>

        <button class="btn btn-primary">Submit</button>

    </form>
@endsection