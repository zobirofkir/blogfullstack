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

        <nav class="hidden lg:block" id="navbar-menu">
            <ul class="flex flex-row gap-4">
                <li><a href="/" class="text-gray-700 hover:text-blue-500 transition font-bold text-lg">Home</a></li>
                <li><a href="/abouts" class="text-gray-700 hover:text-blue-500 transition font-bold text-lg">About</a></li>
                <li><a href="/contacts" class="text-gray-700 hover:text-blue-500 transition font-bold text-lg">Contact</a></li>
            </ul>
        </nav>

        <nav class="hidden lg:block">
            <ul class="flex flex-row gap-4">
                <li><a href="/blogs" class="text-gray-700 hover:text-blue-500 transition font-bold text-lg">Blog</a></li>
                <li><a href="/categories" class="text-gray-700 hover:text-blue-500 transition font-bold text-lg">Categories</a></li>
            </ul>
        </nav>

        <nav
            class="absolute top-16 left-0 w-full bg-white shadow-lg hidden transform transition-transform duration-300 ease-in-out lg:hidden"
            id="mobile-menu"
        >
            <ul class="flex flex-col gap-2 py-4 px-8">
                <li><a href="/" class="text-gray-700 hover:text-blue-500 transition font-bold text-lg">Home</a></li>
                <li><a href="/abouts" class="text-gray-700 hover:text-blue-500 transition font-bold text-lg">About</a></li>
                <li><a href="/contacts" class="text-gray-700 hover:text-blue-500 transition font-bold text-lg">Contact</a></li>
                <li><a href="/blogs" class="text-gray-700 hover:text-blue-500 transition font-bold text-lg">Blog</a></li>
                <li><a href="/categories" class="text-gray-700 hover:text-blue-500 transition font-bold text-lg">Categories</a></li>
            </ul>
        </nav>
    </div>
</div>