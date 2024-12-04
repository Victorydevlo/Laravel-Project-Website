<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreProductTypeRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use App\Models\ProductType;
use Illuminate\Support\Facades\Redirect;


class ProductTypeController extends Controller
{
      /*
     * Display a listing of the resource.
     */
    public function index()
    {
        $productTypes = ProductType::all();
        return view('producttypeform',['product_types'=>$productTypes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        // Gate::authorize('create');
        return view("components.product-type-add");
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductTypeRequest $request)  
    {
        $product_type = new ProductType();
        ProductType::create($request->except('_token', '_method'));
        return Redirect::route('producttype');
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
        $producttype = ProductType::find($id);
        return view('components.product-type-edit',['producttype'=>$producttype]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function updates(UpdateProductRequest $request, ProductType $producttype, int $id)
    {
        $producttype = ProductType::findOrFail($id);
        $producttype->update($request->except('_token', '_method'));
        return Redirect::route('producttype');
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
