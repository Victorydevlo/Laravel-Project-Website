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
    <div class="rounded-none border bg-gray-900 px-6 py-2 m-3 w-26 text-center">  
            <a href="/producttype/{{$producttype->id}}/edit" class="text-stone-50 hover:text-stone-50 transition duration-300">Edit</a>
        </div>

        
</div>
