<x-background-layout>
    <div class="###some tailwindcss style rules###">
    <ul>
        @forelse ($product_types as $product_type)
            <li>{{ $product_type->type }}</li>
            <x-producttype-form :product_type="$product_type" />
        @empty
            <li>No product types available.</li>
        @endforelse
    </ul>
    </div> 
</x-background-layout>