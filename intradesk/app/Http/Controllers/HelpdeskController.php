<?php

namespace Intradesk\Http\Controllers;

use Mail;
use Illuminate\Http\Request;


class HelpdeskController extends Controller
{
    public function create()
    {
        return view('tickets.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'email' => 'required|email',
            'urgency' => 'required',
            'message' => 'required'
        ]);

        $data = array(
            'email'  => $request->email,
            'title' => $request->title,
            'urgency' => $request->urgency,
            'ticketMessage' => $request->message
        );

        Mail::send('emails.ticket', $data, function($message) use ($data)
        {
            $message->from($data['email']);
            $message->to('hudacash@gmail.com', 'Intradesk');
            $message->subject($data['title']);

        });

        return redirect()->back()->with('flash_message', 'Thank you for your ticket');
    }


}
