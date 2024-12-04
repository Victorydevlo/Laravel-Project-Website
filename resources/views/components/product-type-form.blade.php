<div>

@if(Route::is('producttype.store'))
    <form method="POST" action="{{ route('producttype.store') }}">
@elseif(Route::is('producttype.update')) 
    <form method="GET" action="{{ route('producttype.update', ['id' => $producttype->id]) }}">
@else 
    @csrf
        <div class="flex justify-between items-center">
            @if(Route::is('producttype'))
                <!-- Display Product Type -->
                <div class="text-lg font-bold flex justify-between items-center gap-4">
                    {{ $producttype->type ?? null}}
                </div>
            @elseif(Route::is('producttype/{id}/edit'))
                <!-- Input Field for Editing Product Type -->
                <div class="text-lg font-bold flex justify-between items-center gap-4">
                    <input name="type" type="text" placeholder="artist/author/console" value="{{ $producttype->type ?? '' }}" />
                </div>
            @endif
            <div class="">
                <!-- Button for Submitting the Form -->
                <button type="submit" value="{{ $producttype->id ?? null}}" class="bg-gray-800 text-white mt-2 p-2">

                        Update
                </button>
            </div>
        </div>
    </form>
    @endif
</div>
