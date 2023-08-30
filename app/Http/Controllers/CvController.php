<?php

namespace App\Http\Controllers;





class CvController extends Controller
{
    public function downloads(){
        
        // return  dd('ok');
      

         $path = public_path('downloads/Resume.docx');
         return response()->download($path);
    }
}
