<!--This is the page for the product that displayes everyitems-->


<x-productspage>
    <div class="###some tailwindcss style rules###">
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