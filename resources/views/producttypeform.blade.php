<x-background-layout>
    <div class="p-2 m-2 rounded-lg border-2 border-blue-900 max-w-md"> 
    <h1 class="text-2xl font-bold mb-4 text-center">Edit Product Type</h1>
        @forelse ($product_types as $product_type)
            <x-product-type :producttype="$product_type" />
        @empty
            <li>No product types available.</li>
        @endforelse
        <div class="rounded-none border bg-gray-900 px-6 py-2 m-3 w-26 text-center">  
            <a href="{{ route('createtp') }}" class="text-stone-50 hover:text-stone-50 transition duration-300">Add Product</a>
        </div>
    </div> 
</x-background-layout>

