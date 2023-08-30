<?php

namespace App\Http\Controllers\frontendt;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function service(){
        return view('frontend.services');
    }
}
