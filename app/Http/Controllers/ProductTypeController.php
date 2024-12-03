<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use App\Models\ProductType;


class ProductTypeController extends Controller
{
      /*
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        // Gate::authorize('create');
        return view("producttypeform");
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)  
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $producttype = ProductType::find($id);
        $product_types = array($producttype); //this is because product.blade view is expecting an array. This makes it a list of one
        return view('product_types',['product_types'=>$product_types]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        // Gate::authorize('can-edit-product');
        $producttype = Product::find($id);
        return view('producttypeform',['producttype'=>$producttype]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function updates(UpdateProductRequest $request, Product $product, int $id)
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

    public function search(Request $request)
    {
        //
    }
}
