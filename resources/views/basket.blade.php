<x-background-layout>
    <div class="flex justify-end mr-5" style="margin-bottom: 20;">
        <!-- Add any controls, such as "Checkout" or "Continue Shopping" -->
    </div>   

    <div class="flex">
        @forelse ($basketitems as $basketitem)
            <x-product-cards :basketitem="$basketitem" />
        @empty
            <div class="empty-basket">
                <p>Your basket is currently empty.</p>
            </div>
        @endforelse
    </div>
</x-background-layout>
