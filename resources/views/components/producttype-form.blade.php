<div>
    @if(Route::is('ptcreate'))
        <form method="POST" action="{{ route('producttype.store') }}">
            @csrf
            <div class="p-2 m-2 rounded-lg border-2 border-blue-900 max-w-md">
                <div class="text-sm flex justify-between items-center gap-4">
                    {{ $slot }}
                    <button type="submit" class="bg-gray-800 text-white p-2">Add New</button>
                </div>
            </div>
        </form>
    @elseif(Route::is('ptedit'))
        <form method="POST" action="{{ route('producttype.update', ['id' => $product->id]) }}">
            @csrf
            @method('PUT')
            <div class="p-2 m-2 rounded-lg border-2 border-blue-900 max-w-md">
                <div class="text-sm flex justify-between items-center gap-4">
                    {{ $slot }}
                    <button type="submit" class="bg-gray-800 text-white p-2">Edit</button>
                </div>
            </div>
        </form>
    @endif
</div>
