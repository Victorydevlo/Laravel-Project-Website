<x-background-layout>
    <div class="flex justify-end mr-5" style="margin-top: 12; margin-bottom: 20;">

    </div>   
    <div class="flex">
        @forelse ($basketitems as $basketitem)
            <x-product-card :basketitem="$basketitem" />  
        @empty
            <p>No Products</p>
        @endforelse
    </div>
</x-background-layout>