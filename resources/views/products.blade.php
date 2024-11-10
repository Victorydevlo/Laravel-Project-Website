<x-background-layout>
    <div class="###some tailwindcss style rules###">
    @forelse ($products as $product)
        <x-product-card :product="$product" />  
    @empty
        <p>No Products</p>
    @endforelse
    </div> 
</x-background-layout>