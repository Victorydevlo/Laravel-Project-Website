<div class="products-container">

@if (session('error'))
    <div class="bg-red-600 text-white px-4 py-2 rounded shadow-lg w-fit">
        {{ session('error') }}
    </div>
        @endif
    <div class="stockcard">
        <div class="product-card">
            @if($basketitem->product->product_image == 'A')
                <img src="/images/pimage/book.png" class="w-8 h-8 mx-auto">
            @elseif($basketitem->product->product_image == 'B')
                <img src="/images/pimage/cd.png" class="w-8 h-8 mx-auto">
            @elseif($basketitem->product->product_image == 'C')
                <img src="/images/pimage/joystick.png" class="w-8 h-8 mx-auto">
            @else
                <img src="{{ asset('storage/images/' . $basketitem->product->product_image) }}" class="w-8 h-8 mx-auto">
            @endif
            <p class="text-xl font-semibold text-gray-800 text-center">{{ $basketitem->product->name }}</p>
            <p class="text-sm text-gray-600 text-center">{{ $basketitem->product->title }}</p>
            <p class="text-sm text-gray-700 text-center">Price: £{{ $basketitem->price }}</p>
            <p class="text-sm text-gray-700 text-center">Quantity: {{ $basketitem->quantity }}</p>
            <p class="text-sm text-gray-700 text-center">Subtotal: £{{ $basketitem->quantity * $basketitem->price }}</p>   
            <form action="{{ route('basdelete', $basketitem->id) }}" method="POST" class="remove-item-form">
                @csrf
                @method('DELETE')
                <button type="submit" class="remove-btn">Remove</button>
            </form>
            <button> </button>            
        </div>
    </div>
</div>

<style>

.stockcard {
    position: relative;
}

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

.align {
    margin-top: 9;
    gap: 25px;
}
.remove-item-form {
    text-align: center;
    margin-top: 1rem;
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