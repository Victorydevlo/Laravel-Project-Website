<x-background-layout>
    <div class="flex justify-end mr-5" style="margin-top: 12; margin-bottom: 20;">

    </div>   
    <div class="flex">
        @forelse ($products as $product)
            <x-product-card :product="$product" />  
        @empty
            <p>No Products</p>
        @endforelse
    </div>
<!-- Only display CD!-->
    <div class="flex justify-end mr-5" style="margin-top: 12;">
        <div class="rounded-none border border-gray-700 text-center inline-block">
            <a href="/producttype" class="px-4 py-2 block">More</a>
        </div>
    </div>

    <div class="lines"></div>
        <div class="flex">
            @forelse ($productrandomcd as $product)
            <x-product-card :product="$product" />  
            @empty
            <p>No Products</p>
            @endforelse
        </div>
<!-- Only display Game!-->
        <div class="flex justify-end mr-5" style="margin-top: 12;">
        <div class="rounded-none border border-gray-700 text-center inline-block">
            <a href="/producttype" class="px-4 py-2 block">More</a>
        </div>
    </div>
    <div class="lines"></div>
        <div class="flex">
            @forelse ($productrandomgame as $product)
            <x-product-card :product="$product" />  
            @empty
            <p>No Products</p>
            @endforelse
        </div>    
<!-- Only display Game!-->
        <div class="flex justify-end mr-5" style="margin-top: 12;">
        <div class="rounded-none border border-gray-700 text-center inline-block">
            <a href="/producttype" class="px-4 py-2 block">More</a>
        </div>
    </div>
    <div class="lines"></div>
        <div class="flex">
            @forelse ($productrandombook as $product)
            <x-product-card :product="$product" />  
            @empty
            <p>No Products</p>
            @endforelse
        </div>       
</x-background-layout>