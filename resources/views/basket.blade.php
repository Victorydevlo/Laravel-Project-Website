<x-background-layout>
    <div class="flex justify-end mr-5" style="margin-top: 12; margin-bottom: 20;">

    </div>   
    <div class="flex">
        @forelse ($basketitems as $basketitem)
            <x-product-card :basketitem="$basketitem": product="$product" />  
        @empty
            <p>Basket is Empty</p>
        @endforelse
    </div>
</x-background-layout>