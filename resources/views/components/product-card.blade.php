<div class="products-container"> 
    <div class="product-card">
        <img src="/images/pimage/book.png" class="w-8 h-8 mx-auto"></a>
        <div class="rounded-full bg-green-500 hover:bg-blue-700 px-8 mx-auto w-24">{{$product->productType->type}}</div>
        <p class="text-xl font-semibold text-gray-800 text-center">{{$product->name}}</p>
        <p class="text-base text-center">{{$product->title}}</p>
        <p class="text-sm text-center">£{{$product->price}}</p>
    <div>
</div>

<!-- <div class="rounded-full bg-gray-700 hover:bg-blue-700 px-1 m-1 w-5">  
        <a href="/product/{{$product->id}}" class="text-center mx-auto text-gray-50">></a>
   </div> -->
   
   <div class="rounded-full bg-gray-700 hover:bg-blue-700 px-8 mx-auto w-24">  
        <a href="/product/{{$product->id}}" class="text-center mx-auto text-gray-50">Select</a>
   </div>
   
   
   <div  class="px-14 flex justify-center align">
        <div>  
            <a href="/product/{{$product->id}}" class="text-center mx-auto text-gray-50"><img src="/images/wishlist.png" class="w-6 h-6 mx-auto" ></a>
        </div>

        @can('can-edit-product')
            <div>  
                <a href="/product/{{$product->id}}/edit" class="text-center mx-auto text-gray-50"><img src="/images/edit.png" class="w-6 h-6 mx-auto"></a>
            </div>
            <div>  
                <a href="/product/{{route('delete', $product->id)}}" class="text-center mx-auto text-gray-50"><img src="/images/delete.png" class="w-6 h-6 mx-auto"></a>
            </div>
            @endcan
   </div>
   <!-- <button value="{{$product->id}}" 
      class="bg-yellow-300 hover:bg-blue-700 text-gray-700 p-2 m-2 w-24 rounded-sm select-product">
      SelectJS
    </button> -->
</div>
</div>




<style>
.products-container {
  display: flex;
  display: inline-block;
  gap: 9rem;
}

.product-card {

  border: 1px solid #e2e8f0; 
  padding: 1rem;
  background-color: #f8fafc;
  border-radius: 8px;
  width: 303px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.align {
    margin-top: 9;
    gap: 25px;
}
</style>