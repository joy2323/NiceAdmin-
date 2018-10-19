<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UiController extends Controller
{
    public function gen(){
        return view('pages.general');
    }

    public function butt(){
        return view('pages.button');
    }

    public function grid(){
        return view('pages.grids');
    }
}
