<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBasketItemRequest;
use Illuminate\Http\Request;
use App\Models\BasketItem;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

use function Illuminate\Routing\Controllers\except;

class BasketController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $basket_id =Auth::id();

        $basketitems = BasketItem::where('basket_id', $basket_id)->with('product')->get();
        
        $totprice = $basketitems->sum(function($basketitem) {
            if ($basketitem->products) {
                return $basketitem->products->price * $basketitem->quantity;
            } else {
                return 0;
            }
        });
        return view('basket' ,['basketitems'=>$basketitems, 'totprice' => $totprice]);
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
    public function store(StoreBasketItemRequest $request)  
    {
        $product = Product::find($request->product_id);
        $basketid = Auth::id();   

        $basketItems = BasketItem::where('basket_id', $basketid)
        ->where('product_id', $product->id)
        ->first();

        if($basketItems){
            $basketItems->quantity += $request-> quantity;

            if ($basketItems->quantity > $product->stock_quantity){
                return back();
            }
            $basketItems->save();
        }else {
        $basketid = Auth::id();        
            $basketItems = BasketItem::create([
                'basket_id' => $basketid,
                'product_id' => $product->id,
                'quantity'=> $request->quantity,
                'price' => $product->price,
                $request->except('_token', '_method', 'file'),
            ]);
            $basketItems = $basketItems->fresh();
        }

        return Redirect::route('product', ['basketItem' => $basketItems]);
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
    public function updates(StoreBasketItemRequest $request)
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

    public function add(StoreBasketItemRequest $request, $id)
    {
    }
}
