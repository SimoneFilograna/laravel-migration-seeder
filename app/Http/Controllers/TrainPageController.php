<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainPageController extends Controller
{
    public function Index(){
        $trains = train::all();

        return view('home', ["trains" => $trains]);
    }
}
