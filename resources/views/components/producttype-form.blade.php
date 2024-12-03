<div>

@if(Route::is('create'))
        <form method="POST" action="{{route('producttype.store')}}" >
@elseif(Route::is('edit')) 
        <form method="POST" action="{{route('producttype.update', ['id'=>$product->id])}}" >
        <input type="hidden" name="_method" value="PUT">
@endif
    @csrf
        <div class="p-2 m-2 rounded-lg border-2 border-blue-900 max-w-md">
        <div class="text-sm flex justify-between items-center gap-4">
            {{$slot}}
        <button type="submit" class="bg-gray-800 text-white p-2">Edit</button>
        </div>
   
            <div>
                    <button type="submit" class="bg-gray-800 text-white mt-2 p-2">Add New</button>
            </div>
        </div>
    </form>    
</div>