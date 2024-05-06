<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class checkout extends Controller
{
    public function index(){
        return view('pages.checkout.checkout');
    }
}
