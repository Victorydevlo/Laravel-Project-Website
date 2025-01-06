<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWishListRequest;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\WishList;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

use function Illuminate\Routing\Controllers\except;

class WishListController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = WishList::all();
        return view('wishlist', ['products' => $products]);
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
    public function store( $request)  
    {
        $product = Product::find($request->product_id);
        $basketid = Auth::id();   

        if ($product->stock_quantity < $request->quantity) {
            return redirect()->route('product');
        }

        $basketItems = WishList::where('basket_id', $basketid)
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
            $basketItems = WishList::create([
                'basket_id' => $basketid,
                'product_id' => $product->id,
                'quantity'=> $request->quantity,
                'price' => $product->price,
                $request->except('_token', '_method', 'file'),
            ]);
            $basketItems = $basketItems->fresh();
        }

        $product->stock_quantity -= $request->quantity;
        $product->save();

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
    public function updates( $request)
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

    public function add( $request, $id)
    {
    }
}
