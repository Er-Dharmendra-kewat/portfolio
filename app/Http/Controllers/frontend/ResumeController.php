<?php

namespace App\Http\Controllers\frontendt;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function resume(){
        return view('frontend.resume');
    }
}
