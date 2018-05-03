@extends('layouts.master')

@section('content')
    <p>&nbsp</p>
    <div class="row">
        <div class="col-md-12">
            <h1>Submit a Support Request</h1>
            <hr>
            <form>
                <div class="form-group">
                    <label name="email">Email:</label>
                    <input id="email" name="email" class="form-control">
                </div>

                <div class="form-group">
                    <label name="subject">Subject:</label>
                    <input id="subject" name="subject" class="form-control">
                </div>

                <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Urgency
                        <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a href="#">Informational</a></li>
                        <li><a href="#">Low</a></li>
                        <li><a href="#">Medium</a></li>
                        <li><a href="#">High</a></li>
                    </ul>
                </div>

                <div class="form-group">
                    <label name="message">Message:</label>
                    <textarea id="message" name="message" class="form-control">Enter Ticket Details Here...</textarea>
                </div>

                <input type="submit" value="Submit Ticket" class="btn btn-success">

            </form>
        </div>
    </div>
@endsection

