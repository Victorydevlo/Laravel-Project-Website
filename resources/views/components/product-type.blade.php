<div class="flex justify-between items-center">
    @if(Route::is('producttype'))
        <div class="text-lg font-bold flex justify-between items-center gap-4">
            {{ $producttype->type }}
        </div>
    @elseif(Route::is('producttype/{id}/edit'))
        <div class="text-lg font-bold flex justify-between items-center gap-4">
            <input name="name" type="text" placeholder="artist/author/console" value="{{$producttype->type ?? ''}}" />
        </div>
    @endif
        <div class="">
            <button href="/producttype/{id}/edit"type="submit" value="{{$producttype->id}}" class="bg-gray-800 text-white mt-2 p-2">Edit</button>
        </div>
</div>