<script src="{{ asset('js/my.js') }}" ></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
    <header>
        @auth
        <div class="flex justify-between items-center">
            <h1 class="text-center mx-auto text-lg font-semibold">INTEL SHOP</h1>
            <x-dropdown align="left" width="48">
                <x-slot name="trigger">
                    <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out ">
                        <div>{{ Auth::user()->name }}</div>
                        <div class="ml-3">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>
                </x-slot>

                <x-slot name="content" style='overflow:hidden; width:100%; height:500px; position:relative;'>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        @if(Auth::user()->is_admin == 1)
                            Administrator
                        @else
                            Customer
                        @endif
                        <div style="text-align: right;">
                            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </div>
                    </form>
                </x-slot>
            </x-dropdown>
        </div>

        @else
        <div class="flex justify-between items-center">
            <h1 class="text-center mx-auto text-lg font-semibold">INTEL SHOP</h1>
            <div style="text-align: right; margin-right: 20px; margin-top: 8px;" class=>
                <a href="{{ route('login') }}" class="text-sm text-gray-700 border border-gray-700 px-3 py-1 rounded hover:text-blue-700 hover:border-blue-700 transition duration-300">
                    Login
                </a>
                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 border border-gray-700 px-3 py-1 rounded hover:text-blue-700 hover:border-blue-700 transition duration-300">
                    Register
                </a>
                @endif
            </div>
        </div>
        @endauth
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

.filterbutton {
    justify-content: left;
}  
</style>
<section>            
<div class="shadowlines"></div>
<x-menu-bar />
<div class="lines"></div>
<div class="navbarstyle flex">
    <div class="filterbutton">
        <x-dropdown align="left" width="48">
            <x-slot name="trigger">
                <button class="justify-between" style="text-align: right; margin-right: 20px;">
                    <div class="rounded-xl border border-gray-700 px-6 py-2 m-3 w-26 text-center">  
                        <a class="text-gray-700 hover:text-blue-700 transition duration-300">Filter</a>

                        <div class="ml-3 flex">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>                        
                    </div>
                </button>
            </x-slot>
            <x-slot name="content" style='overflow:hidden; width:100%; height:500px; position:relative;'>
                <form method="POST" action="{{ route('logout') }}">

                    <div style="text-align: right;">
                    </div>
                </form>
            </x-slot>
        </x-dropdown>
    </div>

    @if(Route::is('productpage'))
    <div class="navbarstyle">
        <form action="{{ route('search') }}" method="GET">
        
            <div class="justify-between" style="text-align: right; margin-right: 20px;">
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

