<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;

class PortfolioController extends Controller
{
    public function portfolio(){
        return view('frontend.portfolio');
    }
}
