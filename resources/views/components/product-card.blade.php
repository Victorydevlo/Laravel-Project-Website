<div class="products-container"> 
    <div class="stockcard">

        <div style="position: absolute; top: 5px; right: 5px; text-align: center;">
            @if($product-> stock_quantity <= 0)
                <div class="out">Out of stock</div>
            @else 
                <div class="in">In Stock</div>
            @endif
        </div>

        <div class="product-card">
            <form action="{{ route('product') }}" method="POST">
                @if($product['product_image'] == 'A')
                    <a><img src="/images/pimage/book.png" class="w-8 h-8 mx-auto"></a>
                @elseif($product['product_image'] == 'B')
                    <a><img src="/images/pimage/cd.png" class="w-8 h-8 mx-auto"></a>
                @elseif($product['product_image'] == 'C')
                    <a><img src="/images/pimage/joystick.png" class="w-8 h-8 mx-auto"></a>
                @else
                    <img class="w-8 h-8 mx-auto" src="{{ asset('storage/images/' . $product->product_image) }}" alt="product">
                @endif

                <div class="rounded-full bg-lime-200 px-8 mx-auto w-24 text-center">{{$product->stock_quantity}}</div>

                <div class="rounded-full bg-lime-200 px-8 mx-auto w-24 text-center">{{$product->productType->type ?? null}}</div>
                <p class="text-xl font-semibold text-gray-800 text-center">{{$product->name}}</p>
                <p class="text-base text-center">{{$product->title}}</p>
                <p class="text-sm text-center">£{{$product->price}}</p>

                @if(Route::is('product', 'productpage', 'wishlist'))   
                    <div class="rounded-full border border-gray-700 hover:bg-blue-700 px-8 mx-auto w-24">  
                        <a href="/products/{{$product->id}}" class="text-center mx-auto text-black-50">Select</a>
                    </div>
                @elseif(Route::is('showed'))
                    <div class="rounded-full border border-gray-700 hover:bg-blue-700 px-8 mx-auto w-24">  
                        <a href="" class="text-center mx-auto text-black-50">Buy</a>
                    </div>
                @endif

                <div class="px-14 flex justify-center align">
                    <div>  
                        <a href="{{ route('add_wishlist', $product->id) }}" class="text-center mx-auto text-gray-50">
                            <img src="/images/heart.png" class="w-6 h-6 mx-auto">
                        </a>
                    </div>  

                    @can('can-edit-product')
                        <div>  
                            <a href="/product/{{$product->id}}/edit" class="text-center mx-auto text-gray-50">
                                <img src="/images/edit.png" class="w-6 h-6 mx-auto">
                            </a>
                        </div>
                        <div>
                        </form>
                            <form action="{{ route('delete', $product->id) }}" method="POST" class="text-center mx-auto">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-gray-50">
                                    <img src="/images/delete.png" class="w-6 h-6 mx-auto">
                                </button>
                            </form>
                        </div>
                    @endcan
                </div>
            
        </div>
    </div>
</div>

<style>
.products-container {
    display: flex;
    display: inline-block;
    flex-wrap: nowrap;
    gap: 7rem;
    margin-top: 5;
}

.product-card {
    border: 1px solid #e2e8f0; 
    padding: 1rem;
    /* background-color: #f8fafc; */
    border-radius: 8px;
    width: 300px;
    /* box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); */
}

.stockcard {
    position: relative;
}

.align {
    margin-top: 9;
    gap: 25px;
}

.out, .in {
    border-radius: 12px;
    padding: 3px 10px;
    font-size: 0.75rem; /* Small font size */
    font-weight: bold;
    min-width: 40px;
}

.out {
    background-color: #ffebee;
    border: 2px solid #f44336;
    color: #f44336;
}

.in {
    background-color: #e8f5e9;
    border: 2px solid #4caf50;
    color: #4caf50;
}
</style>
