<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\cat;
use App\product;

class CheckoutController extends Controller
{
    public function index(){
        $cats = Cat::all();
        return view('checkout')->with('cats', $cats);
    }
}
