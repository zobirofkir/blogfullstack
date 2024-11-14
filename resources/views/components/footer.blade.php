<footer class="bg-gray-900 text-white py-8">
    <div class="container mx-auto flex flex-col md:flex-row justify-between items-center">

        <div class="mb-4 md:mb-0">
            <h2 class="text-2xl font-bold">{{ config('app.name') }}</h2>
        </div>

        <div class="flex flex-col md:flex-row gap-4 justify-center items-center">
            <a href="/blogs" class="hover:text-blue-500">المدونات</a>
            <a href="/categories" class="hover:text-blue-500">الفئات</a>
            <a href="/contacts" class="hover:text-blue-500">اتصل بنا</a>
        </div>

        <div class="flex gap-4 mt-4 md:mt-0">
            <a href="https://www.facebook.com/bawabapress" target="_blank" class="hover:text-blue-500">
                <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 5 3.68 9.12 8.44 9.88v-6.99H7.9v-2.89h2.54V9.47c0-2.5 1.5-3.88 3.78-3.88 1.1 0 2.24.2 2.24.2v2.46h-1.26c-1.24 0-1.63.77-1.63 1.56v1.87h2.77l-.44 2.89h-2.33v6.99C18.32 21.12 22 17 22 12z"></path>
                </svg>
            </a>
            <a href="https://www.youtube.com/@bawabapress/featured" target="_blank" class="hover:text-blue-500">
                <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M23.498 6.186a2.902 2.902 0 0 0-2.04-2.049C19.521 3.58 12 3.58 12 3.58s-7.521 0-9.458.557a2.902 2.902 0 0 0-2.04 2.05C0 8.153 0 12 0 12s0 3.847.502 5.814a2.902 2.902 0 0 0 2.04 2.049C4.479 20.42 12 20.42 12 20.42s7.521 0 9.458-.557a2.902 2.902 0 0 0 2.04-2.05C24 15.847 24 12 24 12s0-3.847-.502-5.814zM9.545 15.568V8.432l6.227 3.568-6.227 3.568z"></path>
                </svg>
            </a>
        </div>
    </div>

    <div class="text-center mt-4 text-gray-400">
        <p>&copy; {{ date('Y') }} {{ config('app.name') }}. جميع الحقوق محفوظة.</p>
    </div>
</footer>
