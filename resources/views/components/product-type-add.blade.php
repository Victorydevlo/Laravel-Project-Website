<x-background-layout>
    <div class="p-4 m-4 rounded-lg border-2 border-blue-900 max-w-md">
        <h1 class="text-2xl font-bold mb-4">Add Product Type</h1>
        <form method="POST" action="{{ route('ptstore') }}">
            @csrf
            @method('POST')
            <div class="mb-4">
                <label for="type" class="block text-lg font-semibold">Product Type:</label>
                <input type="text" name="type" id="type" class="w-full p-2 border rounded-lg" placeholder="Enter product type" required>
            </div>
            <div class="rounded-none border bg-gray-900 px-6 py-2 m-3 w-26 text-center">
            <button type="submit" class=" text-white px-4 py-2 rounded ">
                Add Type
            </button>
            </div>
        </form>
    </div>
</x-background-layout>