<?php

namespace Intradesk\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'Intradesk';
        return view('pages.index', compact('title'));
    }

    public function helpdesk()
    {
        $title = 'Helpdesk';
        return view('pages.helpdesk', compact('title'));
    }

    public function directory()
    {
        $data = array(
            'title' => 'Directory',
            'directory' => ['Huda', 'Michael', 'Heidi']
        );
        return view('pages.directory')->with($data);
    }

    public function resources()
    {
        $title = 'Resources';
        return view('pages.resources', compact('title'));
    }

}
