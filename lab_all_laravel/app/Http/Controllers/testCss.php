<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testCss extends Controller
{
    //
    public function index(){
        return view(view: "css-example");
    }
}
