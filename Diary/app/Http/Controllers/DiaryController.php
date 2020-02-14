<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiaryController extends Controller
{
    public function home ()
    {
        return view('home');
    }

    public function newestate ()
    {
        return view('newestate');
    }

    public function location ()
    {
        return view('location');
    }
}
