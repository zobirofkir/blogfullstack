<div class="bg-white shadow-md fixed top-0 left-0 right-0 z-50">
    <div class="flex justify-between items-center px-8 py-4">
        <button
            class="block lg:hidden text-gray-700 focus:outline-none"
            id="menu-button"
            aria-label="تبديل القائمة"
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

        <nav class="hidden lg:flex w-full mx-auto" id="navbar-menu">
            <ul class="flex flex-row gap-4">
                <li><a href="/" class="text-gray-700 hover:text-blue-500 transition font-bold text-md uppercase">الرئيسية</a></li>
                <li><a href="/blogs" class="text-gray-700 hover:text-blue-500 transition font-bold text-md uppercase">المدونة</a></li>
                <li><a href="/categories" class="text-gray-700 hover:text-blue-500 transition font-bold text-md uppercase">الفئات</a></li>
                <li><a href="/teams" class="text-gray-700 hover:text-blue-500 transition font-bold text-md uppercase">فريق العمل</a></li>
                <li><a href="/contacts" class="text-gray-700 hover:text-blue-500 transition font-bold text-md uppercase">اتصل بنا</a></li>
            </ul>
        </nav>


        <div class="md:text-2xl text-lg font-bold">
            <a href="/">
                <img src="{{ asset('images/icon/icon.png') }}" class="h-auto w-[150px]" alt="صورة افتراضية">
            </a>
        </div>

        <nav
            class="absolute top-16 left-0 w-full bg-white shadow-lg hidden transform transition-transform duration-300 ease-in-out lg:hidden mt-5"
            id="mobile-menu"
        >
            <ul class="flex flex-col gap-8 justify-center items-center py-4 px-8">
                <li><a href="/" class="text-gray-700 hover:text-blue-500 transition font-bold text-md uppercase shadow-lg px-4 py-2 rounded-full">الرئيسية</a></li>
                <li><a href="/blogs" class="text-gray-700 hover:text-blue-500 transition font-bold text-md uppercase shadow-lg px-4 py-2 rounded-full">المدونة</a></li>
                <li><a href="/categories" class="text-gray-700 hover:text-blue-500 transition font-bold text-md uppercase shadow-lg px-4 py-2 rounded-full">الفئات</a></li>
                <li><a href="/teams" class="text-gray-700 hover:text-blue-500 transition font-bold text-md uppercase shadow-lg px-4 py-2 rounded-full">فريق العمل</a></li>
                <li><a href="/contacts" class="text-gray-700 hover:text-blue-500 transition font-bold text-md uppercase shadow-lg px-4 py-2 rounded-full">اتصل بنا</a></li>
            </ul>
        </nav>
    </div>
</div>
