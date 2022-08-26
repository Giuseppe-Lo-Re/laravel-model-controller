<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class HomeController extends Controller
{
    public function home() {
        // Recupero i dati(Movie) nel database(Movies)
        $movies = Movie::all();
        
        $data = [
            'movies' => $movies
        ];

        return view('home', $data);
    }
} 
