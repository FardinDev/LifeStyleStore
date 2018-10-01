<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\cat;

class ProductsController extends Controller
{
    public function index(){

        if (request()->cat) {
            $products= product::with('cats')->whereHas('cats',function($query){$query->where('slug', request()->cat);})->orderBy('created_at', 'decs')->paginate(9);
            $title = strtoupper(request()->cat);            
        }
        elseif(request()->from && request()->to){
            $products= product::whereBetween('price', [request()->from, request()->to])->orderBy("price")->paginate(9);
            $title = 'Range from ৳'.request()->from.' to ৳'.request()->to;

        }
        elseif(request()->moreThan){
            $products= product::where('price', '>', request()->moreThan)->orderBy("price")->paginate(9);
            $title = 'Showing More Than ৳'.request()->moreThan;
        }
        else {
            $products= product::orderBy('created_at', 'decs')->paginate(12);
            $title = 'ALL PRODUCTS';
        }


        
        $cats = cat::all();

        // dd($products->appends(request()->input())->links());
        return view('products')->with([
            'products' => $products,
            'cats' => $cats,
            'title'=> $title,
            ]);
    }


    public function show($name){

        $product= product::where('name', $name)->firstOrFail();

        $cats = cat::all();
        return view('product')->with([
            'product' => $product,
            'cats' => $cats,
            ]);
    }
}
