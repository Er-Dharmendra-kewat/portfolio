<?php

namespace App\Http\Controllers\frontendt;

use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function about(){
        return view('frontend.about');
    }
}
