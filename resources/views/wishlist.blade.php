<x-background-layout>
    <div class="flex justify-end mr-5" style="margin-bottom: 20;">
    </div>   

    <div class="flex flex-wrap justify-start gap-5">
        @forelse ($wishlist as $wishlists)
            <x-wish-card :wishlists="$wishlists" />
        @empty
            <div class="empty-basket">
                <p>Your basket is currently empty.</p>
            </div>
        @endforelse
    </div>
</x-background-layout>