<div class="products-container"> 
<div class="product-card">
   <p>{{$product->name}}</p>
   <p>{{$product->title}}</p>
   <p>{{$product->price}}</p>

   <div class="rounded-sm bg-yellow-300 hover:bg-blue-700 p-2 m-2 w-24">  
   <a href="/product/{{$product->id}}" class="text-gray-700">Select</a>
   </div>
   <button value="{{$product->id}}" 
      class="bg-yellow-300 hover:bg-blue-700 text-gray-700 p-2 m-2 w-24 rounded-sm select-product">
      SelectJS
    </button>
</div>
</div>




<style>
.products-container {
  display: flex;
  gap: 1rem;
}

.product-card {
  border: 1px solid #e2e8f0; 
  padding: 1rem;
  background-color: #f8fafc;
  border-radius: 8px;
  width: 200px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}
</style>