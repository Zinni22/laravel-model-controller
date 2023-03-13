<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Movie;

class PageController extends Controller
{
    public function index() {

        //Recupero tutti i movie dalla tabella
        $movies = Movie::all();
    
        return view('welcome',
            compact('movies') // prende una serie di paramentri che sono i nomi delle variabili e crea un array associativo
        );
    }

}
