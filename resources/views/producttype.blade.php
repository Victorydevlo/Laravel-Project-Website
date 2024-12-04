<x-background-layout>
    <div class="###some tailwindcss style rules###">
    <ul>
        @forelse ($product_types as $product_type)
            <x-product-type-form :producttype="$product_type" />
        @empty
            <li>No product types available.</li>
        @endforelse
        
    </ul>
    
    </div> 
</x-background-layout>