<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class About extends Controller
{
    public function about(){
        return view('Frontend.about');
    }
}
