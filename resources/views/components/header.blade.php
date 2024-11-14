<div class="bg-white shadow-md fixed top-0 left-0 right-0 z-50">
    <div class="flex justify-between items-center px-8 py-4">
        <button
            class="block lg:hidden text-gray-700 focus:outline-none"
            id="menu-button"
            aria-label="Toggle menu"
        >
            <svg
                class="w-8 h-8"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16"
                ></path>
            </svg>
        </button>

        <div class="md:text-2xl text-lg font-bold">
            <a href="/">
                <img src="{{ asset('images/icon/icon.png') }}" class="h-[60px] w-[60px]" alt="Default Image">
            </a>
        </div>

        <nav class="hidden lg:flex justify-center w-full mx-auto" id="navbar-menu">
            <ul class="flex flex-row gap-4">
                <li><a href="/" class="nav-link text-gray-700 hover:text-blue-500 transition font-bold text-md uppercase">Home</a></li>
                <li><a href="/blogs" class="nav-link text-gray-700 hover:text-blue-500 transition font-bold text-md uppercase">Blog</a></li>
                <li><a href="/categories" class="nav-link text-gray-700 hover:text-blue-500 transition font-bold text-md uppercase">Categories</a></li>
                <li><a href="/teams" class="nav-link text-gray-700 hover:text-blue-500 transition font-bold text-md uppercase">Our Team</a></li>
                <li><a href="/contacts" class="nav-link text-gray-700 hover:text-blue-500 transition font-bold text-md uppercase">Contact Us</a></li>
            </ul>
        </nav>

        <nav
            class="absolute top-0 left-0 w-full h-full bg-blue-900/90 h-screen shadow-lg transform -translate-x-full transition-transform duration-300 ease-in-out lg:hidden"
            id="mobile-menu"
        >
            <div class="flex justify-between items-center px-8 py-4">
                <button
                    id="close-menu"
                    class="text-white text-4xl font-bold"
                    aria-label="Close Menu"
                >
                    &times;
                </button>
            </div>
        
            @php
                $categories = App\Services\Facades\CategoryFacade::get()['categories'];
            @endphp
            
            <ul class="flex flex-col gap-8 justify-center items-center py-4 px-8 h-full">
                <li><a href="/" class="nav-link text-white hover:text-blue-300 transition font-bold text-xl uppercase px-4 py-2 rounded-full">Home</a></li>
                <li><a href="/blogs" class="nav-link text-white hover:text-blue-300 transition font-bold text-xl uppercase px-4 py-2 rounded-full">Blog</a></li>
                <li><a href="/categories" class="nav-link text-white hover:text-blue-300 transition font-bold text-xl uppercase px-4 py-2 rounded-full">Categories</a></li>               
                <li><a href="/teams" class="nav-link text-white hover:text-blue-300 transition font-bold text-xl uppercase px-4 py-2 rounded-full">Our Team</a></li>
                <li><a href="/contacts" class="nav-link text-white hover:text-blue-300 transition font-bold text-xl uppercase px-4 py-2 rounded-full">Contact Us</a></li>
            </ul>

        </nav>
    </div>
</div>
