<div>
<form>  
    <div class="p-2 m-2 rounded-lg border-2 border-blue-900 max-w-md">
        <div class="text-sm">
            <input name="title" type="text" placeholder="title" value = "{{$product->title}"/>
        </div>
        <p class="text-sm">
            <input name="name" type="text" placeholder="artist/author/console" value="{{$product->name}}" />
        </p>
        <p>
            <input type="number" step='0.01' value='0.00' name="price"  placeholder="price" value="{{$product->price/100}}" />
        </p>
        <select>
            <option value= "{{$product->product_type}}"> CD </option>
            <option value= "{{$product->product_type}}"> Film </option>
            <option value= "{{$product->product_type}}"> Games </option>
        </select>     
        <div>
            <button type="submit" class="bg-gray-800 text-white mt-2 p-2">Add New</button>
        </div>
    </div>
</form>
</div>