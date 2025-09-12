<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Plant;

use Illuminate\Http\Request;

class PlantController extends Controller
{

    public function index()
    {
        $plants = Plant::all();
        return view("plants", compact("plants"));
    }
    public function showform()
    {
        return view(view: "createPlant");
    }
    public function addPlant(Request $request){
        $plant = new Plant();
        $plant->plant_name = $request->input('plantName');
        $plant->scientific_name = $request->input('scientificName');
        $plant->garden_id = $request->input('gardenId');
        $plant->save();
        $plants = Plant::all();
        return view("plants", compact("plants"));
    }
    
}

