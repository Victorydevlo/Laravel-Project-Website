<x-background-layout>
    <div class="p-4 m-4 rounded-lg border-2 border-blue-900 max-w-md">
        <h1 class="text-2xl font-bold mb-4">Edit Product Type</h1>
        <form method="POST" action="{{ route('producttype.update', ['id' => $producttype->id]) }}">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="type" class="block text-lg font-semibold">Product Type:</label>
                <input type="text" name="type" id="type" value="{{ $producttype->type }}" 
                       class="w-full p-2 border rounded-lg" required>
            </div>
            <div class="rounded-none border bg-gray-900 px-6 py-2 m-3 w-26 text-center">
            <button type="submit" class=" text-white px-4 py-2">
                Update Type
            </button>            
            </div>
        </form>
    </div>
</x-background-layout>