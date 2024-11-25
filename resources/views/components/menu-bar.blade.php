
<div class="flex">
    <div class="rounded-none bg-gray-700 hover:bg-blue-700 px-6 m-2 w-24">  
        <a href="{{ route('product') }}" class="text-center mx-auto text-gray-50">Home</a>
    </div>

    @if (Auth::check())

        @if(Auth::user()->is_admin==1)
        <div class="rounded-none bg-gray-700 hover:bg-blue-700 px-6 m-3 w-26">  
            <a href="{{ route('create') }}" class="text-center mx-auto text-gray-50">Add Product</a>
        </div>
        @else

        @endif

    @else

    @endif

    <div class="rounded-none bg-gray-700 hover:bg-blue-700 px-6 m-2 w-24">  
        <a href="{{ route('register') }}" class="text-center mx-auto text-gray-50">About</a>
    </div> 
    
    
</div>



