<!-- resources/views/components/wish-card.blade.php -->
<div class="products-container"> 

@if (session('error'))
    <div class="bg-red-600 text-white px-4 py-2 rounded shadow-lg w-fit">
        {{ session('error') }}
    </div>
        @endif
<form action="{{ route('basketitem.store', ['id'=>$wishlists->product->id]) }}" method="POST">
    @csrf
    <div class="stockcard">
        <div style="position: absolute; top: 5px; right: 5px; text-align: center;">
            @if($wishlists->product-> stock_quantity <= 0)
                <div class="out">Out of stock</div>
            @else 
                <div class="in">In Stock</div>
            @endif
        </div>

        <div style="position: absolute; top: 5px; left: 5px; text-align: center;">
        <div class="quanty"> {{$wishlists->product->stock_quantity}} </div>
        </div>

        <div class="product-card">
            <form action="{{ route('product') }}" method="POST">
                @if($wishlists->product['product_image'] == 'A')
                    <a><img src="/images/pimage/book.png" class="w-8 h-8 mx-auto"></a>
                @elseif($wishlists->product['product_image'] == 'B')
                    <a><img src="/images/pimage/cd.png" class="w-8 h-8 mx-auto"></a>
                @elseif($wishlists->product['product_image'] == 'C')
                    <a><img src="/images/pimage/joystick.png" class="w-8 h-8 mx-auto"></a>
                @else
                    <img class="w-8 h-8 mx-auto" src="{{ asset('storage/images/' . $wishlists->product->product_image) }}" alt="product">
                @endif
                <div class="rounded-full bg-lime-200 px-8 mx-auto w-24 text-center">{{$wishlists->product->productType->type ?? null}}</div>
                <p class="text-xl font-semibold text-gray-800 text-center">{{$wishlists->product->title}}</p>
                <p class="text-base text-center">{{$wishlists->product->name}}</p>
                <p class="text-sm text-center">£{{$wishlists->product->price}}</p>
                    <input type="hidden" name="price" value="{{ $wishlists->product->price ?? '' }}">
                    <input type="hidden" name="product_id" value="{{ $wishlists->product->id ?? '' }}">
                    <input type="hidden" name="basket_id" value="{{ Auth::id() ?? '' }}">
                </form>
                <div class="px-14 flex justify-center align">                    
                <form action="{{ route('wisdelete', $wishlists->id) }}" method="POST" class="remove-item-form">
                @csrf
                @method('DELETE')
                <button type="submit" class="remove-btn">Remove</button>
            </form>
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

.out, .in, .quanty {
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

.quanty {
    background-color: #cbd5e1;
    border: 2px solid #94a3b8;
    color: #020617;
}

.remove-btn {
    background-color: #f44336;
    color: #fff;
    border: none;
    padding: 0.5rem 1rem;
    border-radius: 20px;
    cursor: pointer;
    font-size: 0.9rem;
    font-weight: bold;
    transition: background-color 0.3s ease;
}
</style>
