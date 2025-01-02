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

        $basketitems = BasketItem::where('basket_id', $basket_id)->get();
        
        $totprice = $basketitems->sum(function($basketitem) {
            if ($basketitem->products) {
                return $basketitem->products->price * $basketitem->quantity;
            } else {
                return 0;
            }
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
    public function store(StoreBasketItemRequest $request)  
    {
        $basketitem = BasketItem::create($request->except('_token', '_method', 'file'));

        $basketitem = $basketitem->fresh();

        $userId = auth()->id();

        if (!$userId) {
            return redirect()->route('login');
        }

        $product = Product::findOrFail($request->product_id);

        BasketItem::create([
            $request->except('_token', '_method', 'file')
        ]);
        
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
        $id = User::find($id);
        $basketid = Auth::id();
        $product_id = Product::find($id);

        $basketitem = BasketItem::where('basket_id', $basketid)->get();
        $quantity = BasketItem::where('quantity')->get();

        $totprice = $basketitem->sum(function($basketitem) {
            if ($basketitem->products) {
                $basketitem->products->price * $basketitem->quantity;
            } else {
                $basketitem = $basketitem;
            }
        });

        if($basketitem){
            $basketitem->$quantity += $request->quantity;
            $basketitem->save();
        }else {
            BasketItem::create([
                'basket_id' =>$basketid,
                'product_id' =>$product_id,
                'quantity' => $request->quantity,
                'price' => $totprice,

            ]);            
        }
        return Redirect::route('product');
    }        

}
