<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return view('main.index');
    }

    public function about() {
        return view('main.about');
    }
}
