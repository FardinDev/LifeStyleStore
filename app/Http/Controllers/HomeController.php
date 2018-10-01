<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\banner;
use App\tile;
use App\cat;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tiles = tile::inrandomorder()->get();
        $cats = cat::all();
        $banners = banner::inrandomorder()->get();
        $featured = product::where("featured", 1)->get();
        return view('landingpage')->with([
            'featured' => $featured,
            'banners' => $banners,
            'tiles' => $tiles,
            'cats' => $cats,
            ]);
    }
}
