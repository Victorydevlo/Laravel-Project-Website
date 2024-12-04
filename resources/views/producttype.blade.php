<x-background-layout>
    <div class="p-2 m-2 rounded-lg border-2 border-blue-900 max-w-md"> 
    
        @forelse ($product_types as $product_type)
            <x-product-type-form :producttype="$product_type" />
        @empty
            <li>No product types available.</li>
        @endforelse

        <button type="submit" class="bg-gray-800 text-white p-2">Add New</button>
    </div> 
</x-background-layout>