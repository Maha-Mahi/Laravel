<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactUs extends Controller
{
    public function contact(){
        return view('Frontend.contact');
    }
}
