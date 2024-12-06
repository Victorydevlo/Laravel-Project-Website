<div class="flex">
    <!-- Home link -->
    <div class="rounded-none border border-gray-700 px-6 py-2 m-3 w-26 text-center">  
        <a href="{{ route('product') }}" class="text-gray-700 hover:text-blue-700 transition duration-300">Home</a>
    </div>

    <div class="rounded-none border border-gray-700 px-6 py-2 m-3 w-26 text-center">  
        <a href="{{ route('product') }}" class="text-gray-700 hover:text-blue-700 transition duration-300">Products</a>
    </div>

    @can('create', App\Models\Product::class)
        <div class="rounded-none border border-gray-700 px-6 py-2 m-3 w-26 text-center">  
            <a href="{{ route('create') }}" class="text-gray-700 hover:text-blue-700 transition duration-300">Add Product</a>
        </div>

        <div class="rounded-none border border-gray-700 px-6 py-2 m-3 w-26 text-center">  
            <a href="{{ route('producttype') }}" class="text-gray-700 hover:text-blue-700 transition duration-300">Add Product Type</a>
        </div>        
    @endcan

    <div class="rounded-none border border-gray-700 px-6 py-2 m-3 w-26 text-center">  
        <a href="{{ route('register') }}" class="text-gray-700 hover:text-blue-700 transition duration-300">About</a>
    </div> 
    
    <div class="flex-end px-6 py-2 m-3 w-26" style=" margin-right: 20px;">  
        <a href="" class="text-gray-700 hover:text-blue-700 transition duration-300">
            <img src="/images/a.png" class="w-6 h-6">
        </a>
    </div> 
</div>
