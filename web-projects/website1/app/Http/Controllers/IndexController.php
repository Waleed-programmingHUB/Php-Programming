<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    // Index page
    public function Index(){
        return view('index');
    }
}
