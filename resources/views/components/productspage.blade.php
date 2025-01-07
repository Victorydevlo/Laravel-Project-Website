<script src="{{ asset('js/my.js') }}"></script>
@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<header class="bg-gray-100 py-4 shadow-md">
    <div class="container mx-auto px-6">
        <div class="flex justify-between items-center">
            <h1 class="text-lg font-semibold text-gray-800">INTEL SHOP</h1>
            @auth
            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <button class="flex items-center text-sm font-medium text-gray-600 hover:text-gray-800 focus:outline-none transition ease-in-out duration-150">
                        <span class="mr-2">{{ Auth::user()->name }}</span>
                        <svg class="fill-current h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </x-slot>

                <x-slot name="content" class="bg-white shadow-md rounded-md overflow-hidden">
                    <div class="px-4 py-2 text-gray-700">
                        {{ Auth::user()->is_admin == 1 ? 'Administrator' : 'Customer' }}
                    </div>
                    <div class="border-t border-gray-200">
                        <form method="POST" action="{{ route('logout') }}" class="px-4 py-2">
                            @csrf
                            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </div>
                </x-slot>
            </x-dropdown>

            @else
            <div class="flex items-center space-x-6">
                <a href="{{ route('login') }}" class="text-sm text-gray-700 border border-gray-700 px-4 py-2 hover:text-blue-700 hover:border-blue-700 transition duration-300" style="margin-right:10;">
                    Login
                </a>
                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="text-sm text-gray-700 border border-gray-700 px-4 py-2 hover:text-blue-700 hover:border-blue-700 transition duration-300">
                    Register
                </a>
                @endif
            </div>
            @endauth
        </div>
    </div>
</header>
</body>

<style>
.line {
    border-bottom: 2px solid blue;
    margin-top: 5px;
    width: 100%;
}

.lines {
    border-bottom: 2px solid gray;
    margin-top: 5px;
    width: 100%;
} 

.shadowlines {
    border-bottom: 2px solid white;
    margin-top: 5px;
    width: 100%;
    box-shadow: 0 4px 4px rgba(0, 0, 0, 0.3);
    margin-bottom: 10px;
}

.navbarstyle {
    justify-content: right;
}          

 
</style>
<section>            

<x-menu-bar />
<div class="lines"></div>
<div class="navbarstyle flex">
    <div class="filterbutton">
        <div style="margin-right: 20px; margin-top: 10px;">        
                <h1>Order by:</h1>
                <a href="{{ route('filter', ['type' => 'CD']) }}" class="rounded-xl border border-gray-700 px-3 py-1 m-1 inline-block text-gray-700 hover:text-blue-700">CD</a>
                <a href="{{ route('filter', ['type' => 'Book']) }}" class="rounded-xl border border-gray-700 px-3 py-1 m-1 inline-block text-gray-700 hover:text-blue-700">Book</a>
                <a href="{{ route('filter', ['type' => 'Game']) }}" class="rounded-xl border border-gray-700 px-3 py-1 m-1 inline-block text-gray-700 hover:text-blue-700">Game</a>
                <a href="{{ route('filter', ['type' => 'A-Z']) }}" class="rounded-xl border border-gray-700 px-3 py-1 m-1 inline-block text-gray-700 hover:text-blue-700">A-Z</a>
                <a href="{{ route('filter', ['type' => 'Low']) }}" class="rounded-xl border border-gray-700 px-3 py-1 m-1 inline-block text-gray-700 hover:text-blue-700">Lowest Price</a>
                <a href="{{ route('filter', ['type' => 'High']) }}" class="rounded-xl border border-gray-700 px-3 py-1 m-1 inline-block text-gray-700 hover:text-blue-700">High Price</a>
                <a href="{{ route('filter', ['type' => 'Stock']) }}" class="rounded-xl border border-gray-700 px-3 py-1 m-1 inline-block text-gray-700 hover:text-blue-700">Stock</a>
                <a href="{{ route('filter', ['type' => 'None']) }}" class="rounded-xl border border-gray-700 px-3 py-1 m-1 inline-block text-gray-700 hover:text-blue-700">None</a>

        </div>                        
    </div>
    @if(Route::is('productpage', 'filter', 'search'))
    <div class="navbarstyle">
        <form action="{{ route('search') }}" method="GET">
        
            <div class="justify-between" style="text-align: right; margin-right: 20px; margin-top: 20px;">
                <input type="text" name="search" placeholder="Search Products">
                    <button type="submit" class='rounded-none border border-gray-700 px-6 py-2 m-3 w-26 text-center'>Search</button>
            </div>
        </form>
    </div>
</div>
@endif


<div class="lines"></div>
{{$slot}}
<!-- <p>MAIN CONTENT</p> -->
</section>
<section>

<div class="lines"></div>
</section>

<footer>
    <p class="text-right">Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</p>
</footer>
</body>
</html>

