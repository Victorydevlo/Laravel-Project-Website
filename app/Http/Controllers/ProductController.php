<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use App\Models\ProductType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Gate;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('products',['products'=>$products]);


    }

    public function index2()
    {
        $products = Product::all();
        return view('productspage',['products'=>$products]);


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        // Gate::authorize('create');
        return view("productform");
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)  
    {
        
            $product = new Product();

            // $product->name = $request->name;
            // $product->title = $request->title;
            // $product->price = $request->price;
            // $product->product_type_id = $request->product_type_id;
    
            // $product->save();

            Product::create($request->except('_token', '_method','file'));
            return Redirect::route('product');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $product = Product::find($id);
        $products = array($product); //this is because product.blade view is expecting an array. This makes it a list of one
        return view('products',['products'=>$products]);
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        // Gate::authorize('can-edit-product');
        $product = Product::find($id);
        return view('productform',['product'=>$product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function updates(UpdateProductRequest $request, Product $product, int $id)
    {
        $product = Product::findOrFail($id);
        $product->update($request->except('_token', '_method'));
        return Redirect::route('product');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $product = Product::find($id);
        $product ->delete();
        return Redirect::route('product');
    }

    public function search(Request $request)
{

    $search = $request->input('search');

    $products = Product::where('name', 'LIKE', '%' . $search . '%')->get();

    return view('products', ['products' => $products]);

}
}
