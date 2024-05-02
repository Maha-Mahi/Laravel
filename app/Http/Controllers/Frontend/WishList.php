<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WishList extends Controller
{
    public function wishlist(){
        return view('Frontend.wishlist');
    }
}
