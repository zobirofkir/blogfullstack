<div class="bg-white shadow-md fixed top-0 left-0 right-0 z-50">
    <div class="flex justify-between items-center px-8 py-4">
        <div class="md:text-2xl text-lg font-bold">
            <a href="/">
                <img src="{{ asset('images/icon/icon.png') }}" class="h-10 w-10 rounded-full" alt="Default image">
            </a>
        </div>

        <button
            class="block lg:hidden text-gray-700 focus:outline-none"
            id="menu-button"
            aria-label="Toggle Menu"
        >
            <svg
                class="w-6 h-6"
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

        <nav class="hidden lg:block mx-auto" id="navbar-menu">
            <ul class="flex flex-row gap-4">
                <li><a href="/" class="text-gray-700 hover:text-blue-500 transition font-bold text-md uppercase">Home</a></li>
                <li><a href="/blogs" class="text-gray-700 hover:text-blue-500 transition font-bold text-md uppercase">Blog</a></li>
                <li><a href="/categories" class="text-gray-700 hover:text-blue-500 transition font-bold text-md uppercase">Categories</a></li>
                <li><a href="#" class="text-gray-700 hover:text-blue-500 transition font-bold text-md uppercase">Advertisement</a></li>
                <li><a href="#" class="text-gray-700 hover:text-blue-500 transition font-bold text-md uppercase">Work Team</a></li>
                <li><a href="#" class="text-gray-700 hover:text-blue-500 transition font-bold text-md uppercase">Contact Us</a></li>
            </ul>
        </nav>


        <div class="hidden md:flex items-center gap-4">
            {{-- Please Add Here Your Buy Me A Coffee Url --}}
            <a href="https://www.buymeacoffee.com/zobirofkir" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition font-bold text-md uppercase">Donate</a>
        </div>

        <nav
            class="absolute top-16 left-0 w-full bg-white shadow-lg hidden transform transition-transform duration-300 ease-in-out lg:hidden"
            id="mobile-menu"
        >
            <ul class="flex flex-col gap-8 justify-center items-center py-4 px-8">
                <li><a href="/" class="text-gray-700 hover:text-blue-500 transition font-bold text-md uppercase shadow-lg px-4 py-2 rounded-full">Home</a></li>
                <li><a href="/blogs" class="text-gray-700 hover:text-blue-500 transition font-bold text-md uppercase shadow-lg px-4 py-2 rounded-full">Blog</a></li>
                <li><a href="/categories" class="text-gray-700 hover:text-blue-500 transition font-bold text-md uppercase shadow-lg px-4 py-2 rounded-full">Categories</a></li>
                <li><a href="#" class="text-gray-700 hover:text-blue-500 transition font-bold text-md uppercase shadow-lg px-4 py-2 rounded-full">Advertisement</a></li>
                <li><a href="#" class="text-gray-700 hover:text-blue-500 transition font-bold text-md uppercase shadow-lg px-4 py-2 rounded-full">Work Team</a></li>

                {{-- Please Add Here Your Buy Me A Coffee Url --}}
                <li><a href="https://www.buymeacoffee.com/zobirofkir" class="text-gray-700 hover:text-blue-500 transition font-bold text-md uppercase shadow-lg px-4 py-2 rounded-full">Donate</a></li>

                <li><a href="#" class="text-gray-700 hover:text-blue-500 transition font-bold text-md uppercase shadow-lg px-4 py-2 rounded-full">Contact Us</a></li>
            </ul>
        </nav>
    </div>
</div>
