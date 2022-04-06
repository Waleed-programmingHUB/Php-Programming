<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Page1Controller extends Controller
{
    // page1
    public function Page($title = "Laravel learning for web development.",$username = "Waleed Sarwar")
    {
        $data = compact('title','username');
        return view('page1')->with($data);
    }
}
