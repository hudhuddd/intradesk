<?php

namespace Intradesk\Http\Controllers;

use Illuminate\Http\Request;
use Intradesk\Resource;
use Intradesk\Category;


class ResourcesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resources = Resource::all();
        return view('resources.index')->with('resources', $resources);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats = array();
        $categories = Category::all();
        foreach($categories as $category)
        {
            $cats[$category->id] = $category->name;
        }
        return view('resources.create')->with('categories', $cats);
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
            'link' => 'required',
            'category_id' => 'required'
        ]);

        // Create Resource
        $resource = new Resource;
        $resource->title = $request->input('title');
        $resource->link = $request->input('link');
        $resource->category_id = $request->input('category_id');
        $resource->save();

        return redirect('/')->with('success', 'Resource Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $resource = Resource::find($id);
        return view('resources.show')->with('resource', $resource);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $resource = Resource::find($id);
        return view('resources.edit')->with('resource', $resource);
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
            'link' => 'required',
            'category_id' => 'required'
        ]);

        // Create Resource
        $resource = Resource::find($id);
        $resource->title = $request->input('title');
        $resource->link = $request->input('link');
        $resource->category_id = $request->input('category_id');
        $resource->save();

        return redirect('/')->with('success', 'Resource Created');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $resource = Resource::find($id);
        $resource->delete();

        return redirect('/')->with('success', 'Resource Removed');
    }
}
