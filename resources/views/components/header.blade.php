<div class="bg-white shadow-md fixed top-0 left-0 right-0 z-50">
    <div class="flex justify-between items-center px-8 py-4">
        <button
            class="block lg:hidden text-gray-700 focus:outline-none"
            id="menu-button"
            aria-label="تبديل القائمة"
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

        <nav class="hidden lg:flex w-full mx-auto" id="navbar-menu">
            <ul class="flex flex-row gap-4">
                <li><a href="/contacts" class="nav-link text-gray-700 hover:text-blue-500 transition font-bold text-md uppercase">اتصل بنا</a></li>
                <li><a href="/teams" class="nav-link text-gray-700 hover:text-blue-500 transition font-bold text-md uppercase">فريق العمل</a></li>
                <li><a href="/categories" class="nav-link text-gray-700 hover:text-blue-500 transition font-bold text-md uppercase">الفئات</a></li>
                <li><a href="/blogs" class="nav-link text-gray-700 hover:text-blue-500 transition font-bold text-md uppercase">المدونة</a></li>
                <li><a href="/" class="nav-link text-gray-700 hover:text-blue-500 transition font-bold text-md uppercase">الرئيسية</a></li>
            </ul>
        </nav>

        <div class="md:text-2xl text-lg font-bold">
            <a href="/">
                <img src="{{ asset('images/icon/icon.png') }}" class="h-[60px] w-[60px]" alt="صورة افتراضية">
            </a>
        </div>

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
                <li><a href="/" class="nav-link text-white hover:text-blue-300 transition font-bold text-xl uppercase px-4 py-2 rounded-full">الرئيسية</a></li>
                <li><a href="/blogs" class="nav-link text-white hover:text-blue-300 transition font-bold text-xl uppercase px-4 py-2 rounded-full">المدونة</a></li>
                <li><a href="/categories" class="nav-link text-white hover:text-blue-300 transition font-bold text-xl uppercase px-4 py-2 rounded-full">الفئات</a></li>               
                <li><a href="/teams" class="nav-link text-white hover:text-blue-300 transition font-bold text-xl uppercase px-4 py-2 rounded-full">فريق العمل</a></li>
                <li><a href="/contacts" class="nav-link text-white hover:text-blue-300 transition font-bold text-xl uppercase px-4 py-2 rounded-full">اتصل بنا</a></li>
            </ul>

        </nav>
    </div>
</div>
