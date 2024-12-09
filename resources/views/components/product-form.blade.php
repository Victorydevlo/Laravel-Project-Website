<div>

@if(Route::is('create'))
        <form method="POST" action="{{route('product.store')}}" enctype="multipart/form-data">
@elseif(Route::is('edit')) 
        <form method="POST" action="{{route('product.update', ['id'=>$product->id])}}" >
        <input type="hidden" name="_method" value="PUT">
@endif
    @csrf

    @if ($errors->any())
        <div class="bg-red-600 border-solid rounded-md border-2 border-red-700">
            <ul>
            @foreach ($errors->all() as $error)
            <li class="text-lg text-gray-100">{{ $error }}</li>
            @endforeach
            </ul>
        </div>
            @endif
        <div class="p-2 m-2 rounded-lg border-2 border-blue-900 max-w-md">
            <div class="text-sm">
                <input name="title" type="text" placeholder="title" value = "{{$product->title ?? ''}}"/>
            </div>
            <p class="text-sm">
                <input name="name" type="text" placeholder="artist/author/console" value="{{$product->name ?? ''}}" />
            </p>
            <p>
                <input type="number" step='0.01' name="price"  placeholder="price" value="{{($product->price ?? 0)}}" />
            </p>
            <select name='product_type_id'>
                <option value= "{{$product->product_type_id ?? 1}}"> Book </option>
                <option value= "{{$product->product_type_id ?? 2}}"> CD </option>
                <option value= "{{$product->product_type_id ?? 3}}"> Games </option>
            </select>  
            <div class='formupload'>                
                <input type="file" name="file" id="file">
            </div>
            <div>
                @if(Route::is('create'))
                    <button type="submit" class="bg-gray-800 text-white mt-2 p-2">Add New</button>
                @elseif(Route::is('edit'))         
                    <button href="{{ route('product') }}"type="submit" value="{{$product->id}}" class="bg-gray-800 text-white mt-2 p-2">Update</button>
                @endif
            </div>
        </div>
    </form>    
</div>