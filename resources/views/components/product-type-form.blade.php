<div>

@if(Route::is('create'))
        <form method="POST" action="{{route('producttype.store')}}" >
@elseif(Route::is('edit')) 
        <form method="POST" action="{{route('producttype.update', ['id'=>$product->id])}}" >
        <input type="hidden" name="_method" value="PUT">
@endif
    @csrf
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
        </form>

</div>

