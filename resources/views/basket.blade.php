<x-background-layout>
    <div class="flex justify-end mr-5" style="margin-bottom: 20px;">
    </div>

    <div class="flex flex-wrap justify-start gap-5">
        @forelse ($basketitems as $basketitem)
            <x-product-cards :basketitem="$basketitem" />
        @empty
            <div class="empty-basket">
                <p>Your basket is currently empty.</p>
            </div>
        @endforelse
    </div>

    <div class="mt-6">
    {{ $basketitems->links() }}
    
</div>
</x-background-layout>
