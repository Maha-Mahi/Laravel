<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductDetails extends Controller
{
    public function proddetails(){
        return view('pages.productdetails.product-details');
    }
}
