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
        $userid =Auth::id();

        $wishlist = WishList::where('user_id', $userid)->with('product')->get();
        $product = Product::all();

        return view('wishlist', ['wishlist' => $wishlist, 'product' => $product]);
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
    public function store(StoreWishListRequest $request)  
    {
        $product = Product::find($request->wishlist_id);
        $userid = Auth::id();   

        $wishlist = WishList::where('user_id', $userid)
        ->where('wishlist_id', $product->id)
        ->first();

        if($wishlist){

            return Redirect::route('product');
        }       
            $wishlist = WishList::create([
                'user_id' => $userid,
                'wishlist_id' => $product->id,
                $request->except('_token', '_method', 'file'),
            ]);        

        return Redirect::route('product', ['wishlist' => $wishlist]);
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
