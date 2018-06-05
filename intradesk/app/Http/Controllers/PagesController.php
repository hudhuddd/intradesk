<?php

namespace Intradesk\Http\Controllers;

use Illuminate\Http\Request;
use Intradesk\Resource;
use Intradesk\Category;

class PagesController extends Controller
{
    public function index()
    {
        $categories = Category::with('resources')->get();
        return view('pages.index')->with('categories', $categories);
    }

}
