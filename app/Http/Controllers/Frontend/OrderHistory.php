<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderHistory extends Controller
{
    public function orderhistory(){
        return view('pages.orderhistory.order-history');
    }
}
