<div class="flex">
    <!-- Home link -->
    <div class="rounded-none border border-gray-700 px-6 py-2 m-3 w-26 text-center">  
        <a href="{{ route('product') }}" class="text-gray-700 hover:text-blue-700 transition duration-300">Home</a>
    </div>

    <div class="rounded-none border border-gray-700 px-6 py-2 m-3 w-26 text-center">  
        <a href="{{ route('productpage') }}" class="text-gray-700 hover:text-blue-700 transition duration-300">Products</a>
    </div>

    @can('create', App\Models\Product::class)
        <div class="rounded-none border border-gray-700 px-6 py-2 m-3 w-26 text-center">  
            <a href="{{ route('create') }}" class="text-gray-700 hover:text-blue-700 transition duration-300">Add Product</a>
        </div>

        <div class="rounded-none border border-gray-700 px-6 py-2 m-3 w-26 text-center">  
            <a href="{{ route('producttype') }}" class="text-gray-700 hover:text-blue-700 transition duration-300">Add Product Type</a>
        </div>        
    @endcan

    <x-dropdown align="left" width="48">
                <x-slot name="trigger">
                    <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out ">
                    <img src="/images/filter.png" class="w-6 h-6 mx-auto px-auto">
                        <div class="ml-3">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>
                </x-slot>

                <x-slot name="content" style='overflow:hidden; width:100%; height:500px; position:relative;'>
                    <form method="POST" action="{{ route('logout') }}">
                        <div style="text-align: right;">
                            <!-- <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                                
                            </x-dropdown-link> -->
                        </div>
                    </form>
                </x-slot>
            </x-dropdown>
</div>
