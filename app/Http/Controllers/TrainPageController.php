<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainPageController extends Controller
{
    public function Index(){
        $trains = train::all()->where("data_partenza",now()->toDateString());

        return view('home', ["trains" => $trains]);
    }
}
