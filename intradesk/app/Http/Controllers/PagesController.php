<?php

namespace Intradesk\Http\Controllers;

use Illuminate\Http\Request;
use Intradesk\Resource;

class PagesController extends Controller
{
    public function index()
    {
        $resources = Resource::all()->load('category');
        return view('pages.index')->with('resources', $resources);
    }

}
