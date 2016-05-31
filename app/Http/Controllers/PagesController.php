<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class PagesController extends Controller
{
    public function home()
    {
    	$name = 'Guest';
    	return view('pages.home', compact('name'));
    }

    public function about()
    {
    	return view('pages.about');
    }
}
