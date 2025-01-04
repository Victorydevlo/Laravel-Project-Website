<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBasketItemRequest;
use Illuminate\Http\Request;
use App\Models\Basket;
use App\Models\BasketItem;
use App\Models\Product;
use App\Models\User;
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
        $products = Product::all();
        return view('product-card', ['products' => $products]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBasketItemRequest $request)  
    {
        $userId = auth()->id();

        if (!$userId) {
            return redirect()->route('login');
        }

        $basketItem = BasketItem::where('basket_id', $userId)
        ->where('id', $request->id)
        ->first();

            if ($basketItem) {
                $basketItem->quantity += $request->quantity;
                $basketItem->save;
            }else{
            BasketItem::create($request->except('_token', '_method', 'file'));
            }

        return Redirect::route('product');
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
        //All basket item to be called for use

        $basketitem = BasketItem::all();
        $id = User::find($id);
        //Basket ID for each user ID
        $basketid = Auth::id();

        if(!$basketid){
            return back();
        }

        //Product ID

        $basketitem = BasketItem::where('basket_id', $basketid)->where('id', $request->id)->first();

        // $totprice = $basketitem->sum(function($basketitem) {
        //     if ($basketitem->products) {
        //         $basketitem->products->price * $basketitem->quantity;
        //     } else {
        //         $basketitem = $basketitem;
        //     }
        // });

        if($basketitem){
            $basketitem->quantity += $request-> quantity;
            $basketitem->save();
        }else {
            BasketItem::create($request -> except('_token', '_method', 'file'));            
        }


        return Redirect::route('basket');
    }        

}
