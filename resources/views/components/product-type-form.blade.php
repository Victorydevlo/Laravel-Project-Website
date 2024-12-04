<div>

        <form method="POST" action="{{ route('producttype.store') }}">
            @csrf
            <div class="p-2 m-2 rounded-lg border-2 border-blue-900 max-w-md">
                <div class="text-sm flex justify-between items-center gap-4">
                    {{ $producttype->type }}
                    <button type="submit" class="bg-gray-800 text-white p-2">Edit</button>

                </div>
                
            </div>
        </form>
</div>
