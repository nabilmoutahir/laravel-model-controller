<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// ADD MODEL MOVIE
use App\Models\Movie;

class PageController extends Controller


{
    // Route home
    public function index(){
        return view('home');
    }
}
