<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Garden;

class gardenController extends Controller
{
    
    public function index(){
        $gardens = DB::select("SELECT * FROM gardens");
        return view("garden", compact("gardens"));
    }
}

