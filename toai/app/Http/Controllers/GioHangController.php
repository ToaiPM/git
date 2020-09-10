<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;

class GioHangController extends Controller
{
    public function getGioHang()
    {
    	Cart::add(['id'=>1,'name'=>'Nguyen tan Toai','price'=>3000,'weight'=>20,'qty'=>12]);
    }
}
