<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Category extends Controller
{
    public function category(){
        return view('Frontend.category');
    }
}
