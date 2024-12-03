<x-background-layout>
    <div class="###some tailwindcss style rules###">
    <ul>
        @forelse ($product_types as $product)
            <li>{{ $product->type }}</li>
        @empty
            <li>No product types available.</li>
        @endforelse
    </ul>
    </div> 
</x-background-layout>