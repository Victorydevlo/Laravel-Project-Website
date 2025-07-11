<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\WishList;
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
        $products = Product::inRandomOrder()->limit(5)->get();

        $productrandomcd = Product::where("product_type_id", 2)->limit(5)->get();

        $productrandomgame = Product::where("product_type_id", 3)->limit(5)->get();

        $productrandombook = Product::where("product_type_id", 1)->limit(5)->get();

        return view('products',['products'=>$products , 'productrandomcd'=>$productrandomcd, 'productrandombook'=>$productrandombook, 'productrandomgame'=>$productrandomgame]);


    }

    public function index2(Request $request)
    {
        $products = Product::paginate(15);
        return view('productspage',['products'=>$products]);


    }

    public function filter(Request $request)
    {
        $type = $request->query('type');

        if ($type == "CD") {
            $products = Product::where("product_type_id", 2)->paginate(15);
        } elseif ($type == "Book") {
            $products = Product::where("product_type_id", 1)->paginate(15);
        } elseif ($type == "Game") {
            $products = Product::where("product_type_id", 3)->paginate(15);
        } elseif ($type == "A-Z") {
            $products = Product::orderBy("title", "asc")->paginate(15);
        } elseif ($type == "Low") {
            $products = Product::orderBy("price", "asc")->paginate(15);
        } elseif ($type == "High") {
            $products = Product::orderBy("price", "desc")->paginate(15);
        } elseif ($type == "Stock") {
            $products = Product::orderBy("stock_quantity", 'desc')->paginate(15);
        } 
        else {
            $products = Product::paginate(15);
        }
        
        return view('productspage', ['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $producttype = ProductType::all();        
        // Gate::authorize('create');
        return view("productform", ['producttypes'=>$producttype]);
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)  
    {

            $product = Product::create($request->except('_token', '_method', 'file'));

            $product = $product->fresh();

            if($request->file('file')!=null){
                $product_image = $request->file('file')->store('images', 'public');
                $product->product_image=str_replace('images/', '', $product_image);
                $product->save();
            }
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

    public function showed(int $id)
    {
        $product = Product::find($id);
        $products = array($product); //this is because product.blade view is expecting an array. This makes it a list of one

        $productrandomcd = Product::where("product_type_id", 2);

        $productrandomgame = Product::where("product_type_id", 3);

        $productrandombook = Product::where("product_type_id", 1);

        return view('buy_product',['products'=>$products, 'productrandomcd'=>$productrandomcd, 'productrandombook'=>$productrandombook, 'productrandomgame'=>$productrandomgame]);
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        // Gate::authorize('can-edit-product');
        $producttype = ProductType::all(); 
        $product = Product::find($id);
        return view('productform',['product'=>$product, 'producttypes'=>$producttype]);
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

    $products = Product::where('title', 'LIKE', '%' . $search . '%')->paginate(15)->appends(request()->query());

    return view('productsearch', ['products' => $products]);

}


public function test(Request $request)
{
    

    return view('welcome');

}
}
