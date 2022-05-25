<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use app\Models\Movie;

class MovieController extends Controller
{
    public function index(){

        $movies = movie::all();

        return view('index', compact('movies'));

    }
}
