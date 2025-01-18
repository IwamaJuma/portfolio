<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    //add
    public function index()
    {
        return view('hello');
    }
}
