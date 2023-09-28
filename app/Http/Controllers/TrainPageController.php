<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainPageController extends Controller
{
    public function Index(){
        $trains = Train::all();

        // E' possibile evitare di utilizzare l'if utilizzando un query che
        // va a filtrare direttamente i dati passatici dalla variabile $trains
        // ->where("data_partenza", now()->toDateString())

        return view('home', ["trains" => $trains]);
    }
}
