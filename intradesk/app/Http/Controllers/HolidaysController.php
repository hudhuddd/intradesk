<?php

namespace Intradesk\Http\Controllers;

use Illuminate\Http\Request;
use Intradesk\Holiday;


class HolidaysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $holidays = Holiday::orderBy('id', 'asc')->paginate(10);
        return view('holidays.index')->with('holidays', $holidays);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('holidays.create');
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
            'name' => 'required',
            'month' => 'required',
            'day' => 'required'
        ]);

        // Create Holiday
        $holiday = new Holiday;
        $holiday->name = $request->input('name');
        $holiday->month = $request->input('month');
        $holiday->day = $request->input('day');
        $holiday->save();

        return redirect('/holidays')->with('success', 'Holiday Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $holiday = Holiday::find($id);
        return view('holidays.show')->with('holiday', $holiday);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $holiday = Holiday::find($id);
        return view('holidays.edit')->with('holiday', $holiday);
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
            'name' => 'required',
            'month' => 'required',
            'day' => 'required'
        ]);

        // Update Holiday
        $holiday = Holiday::find($id);
        $holiday->name = $request->input('name');
        $holiday->month = $request->input('month');
        $holiday->day = $request->input('day');
        $holiday->save();

        return redirect('/holidays')->with('success', 'Holiday Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $holiday = Holiday::find($id);
        $holiday->delete();

        return redirect('/holidays')->with('success', 'Holiday Removed');
    }
}
