<x-background-layout>
    <div class="flex">
        @forelse ($wishlist as $wishlist)
            <x-product-card :wishlist="$wishlist" />  
        @empty
            <p>No Products inside here :)</p>
        @endforelse
    </div>
</x-background-layout>