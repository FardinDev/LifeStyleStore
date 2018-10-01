<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\cat;
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  $cats = cat::all();
       return view('cart')->with('cats', $cats);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Cart::add($request->input('id'), $request->input("name"), $request->input("quantity"), $request->input("price"))
            ->associate('App\product');

        return $request->input("name");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        Cart::update($request->input('rowId'), $request->input('quantity'));
        return redirect()->route('cart')->with('updated', 'updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);
        
        return redirect()->route('cart')->with('removed', 'removed');
    }


    public function ajax(Request $request)
    {
        Cart::remove($request->input('id'));
        return redirect()->route('cart')->with('removed', 'removed');
    }






}
