<x-productspage> 
    <div class="flex flex-wrap justify-start gap-5">
        @forelse ($products as $product)
            <x-product-card :product="$product" />  
        @empty
            <p>No Products</p>
        @endforelse
    </div>

    <div class="mt-6">
    {{ $products->links() }}
    
</div>
</x-productspage>