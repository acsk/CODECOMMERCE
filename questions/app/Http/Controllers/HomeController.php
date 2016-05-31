<?php

namespace Questions\Http\Controllers;

use Illuminate\Http\Request;

use Questions\Http\Requests;
use Questions\Http\Controllers\Controller;

class HomeController extends Controller
{
    
    public function index()
    {
       return view('home.index');
    }

    
}
