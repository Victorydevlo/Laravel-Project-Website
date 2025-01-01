<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Basket;
use App\Models\BasketItem;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;


class BasketController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        $basket_id =Auth::id();

        $basketitems = BasketItem::where('basket_id', $basket_id)->get();
        
        $totprice = $basketitems->sum(function($basketitem) {
            return $basketitem->products->price * $basketitem->quantity;
        });
        return view('basket' ,['basketitems'=>$basketitems, $totprice]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()  
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        //
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function updates(int $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        //
    }

    public function add(Request $request, int $id)
    {
        $userid = Auth::id();
        $product = Product::find($id);
        
    }        

}
