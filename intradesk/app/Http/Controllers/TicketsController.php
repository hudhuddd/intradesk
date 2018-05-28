<?php

namespace Intradesk\Http\Controllers;

use Illuminate\Http\Request;
use Intradesk\Ticket;

class TicketsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets = Ticket::orderBy('id', 'asc')->paginate(10);
        return view('tickets.index')->with('tickets', $tickets);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tickets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'client_id' => 'required',
            'email' => 'required',
            'urgency' => 'required',
            'message' => 'required'
        ]);

        // Create Ticket
        $ticket = new Ticket;
        $ticket->title = $request->input('title');
        $ticket->client_id = $request->input('client_id');
        $ticket->email = $request->input('email');
        $ticket->urgency = $request->input('urgency');
        $ticket->message = $request->input('message');
        $ticket->save();

        return redirect('/tickets')->with('success', 'Ticket Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ticket = Ticket::find($id);
        return view('tickets.show')->with('ticket', $ticket);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ticket = Ticket::find($id);
        return view('tickets.edit')->with('ticket', $ticket);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'client_id' => 'required',
            'email' => 'required',
            'urgency' => 'required',
            'message' => 'required'
        ]);

        // Update Ticket
        $ticket = Ticket::find($id);
        $ticket->title = $request->input('title');
        $ticket->client_id = $request->input('client_id');
        $ticket->email = $request->input('email');
        $ticket->urgency = $request->input('urgency');
        $ticket->message = $request->input('message');
        $ticket->save();

        return redirect('/tickets')->with('success', 'Ticket Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ticket = Ticket::find($id);
        $ticket->delete();

        return redirect('/tickets')->with('success', 'Ticket Removed');
    }
}
