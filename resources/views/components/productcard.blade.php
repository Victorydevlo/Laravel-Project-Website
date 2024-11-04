<div class="w-full max-w-sm bg-slate-50 border border-2 border-gray-400 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <div class="flex flex-col items-center pt-10 pb-10">
        <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="/images/pi.webp" alt="Person Image"/>
        <h1 class="mb-1 text-xl font-medium text-gray-900 blue:text-white">{{$product['title']??'title'}}</h1>
        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{$product['name']??'name'}}</h5>
        <span class="text-base text-gray-500 dark:text-gray-400">{{$product['price']??'price'}}</span>
    </div>
</div>