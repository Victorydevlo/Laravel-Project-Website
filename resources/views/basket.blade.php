<x-background-layout>
    <div class="flex justify-end mr-5" style="margin-top: 12px; margin-bottom: 20px;">
    </div>

    <div class="flex flex-wrap gap-4">
        @if($items->isNotEmpty())
            @foreach ($items as $item)
                <x-product-card :product="$item->product" :quantity="$item->quantity" :price="$item->price" />
            @endforeach
        @else
            <p>No Products in Basket</p>
        @endif
    </div>
</x-background-layout>