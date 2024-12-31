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
        $basket = Auth::user()->basket;
        $items = $basket ? $basket->items : [];

        return view('basket', ['basket'=>$basket]);
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

    public function add(Request $request)
    {
    $product = Product::findOrFail($request->input('id'));
    $quantity = $request->input('quantity', 1);
    if ($product->stock_quantity < $quantity) {
        return redirect()->route('products')->withErrors(['quantity' => 'Out of stock']);
    }

    $basket = auth()->user()->basket ?? Basket::create(['user_id' => auth()->id()]);
    $item = $basket->items()->where('product_id', $product->id)->first();

    if ($item) {
        if (($item->quantity + $quantity) <= $product->stock_quantity) {
            $item->quantity += $quantity;
            $item->save();
        } else {
            return redirect()->route('basket')->withErrors(['quantity' => 'Out Of stock']);
        }
    } else {
        $basket->items()->create([
            'product_id' => $product->id,
            'quantity' => $quantity,
            'price' => $product->price,
        ]);
    }
    $product->stock_quantity -= $quantity;
    $product->save();

        return Redirect::route('basket');
    }

}
