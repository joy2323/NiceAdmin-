<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function pro(){
        return view('pages.profile');
    }
    public function log(){
        return view('pages.login');
    }
    public function con(){
        return view('pages.contact');
    }
    public function blan(){
        return view('pages.blank');
    }
    public function error(){
        return view('pages.404');
    }
}
