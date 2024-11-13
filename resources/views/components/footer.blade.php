<footer class="bg-gray-900 text-white py-8">
    <div class="container mx-auto flex flex-col md:flex-row justify-between items-center">

        <div class="mb-4 md:mb-0">
            <h2 class="text-2xl font-bold">{{ config('app.name') }}</h2>
        </div>


        <div class="flex flex-col md:flex-row gap-4">
            <a href="/privacy-policy" class="hover:text-blue-500">Privacy Policy</a>
            <a href="/terms-of-service" class="hover:text-blue-500">Terms of Service</a>
            <a href="/contacts" class="hover:text-blue-500">Contact Us</a>
        </div>


        <div class="flex gap-4 mt-4 md:mt-0">
            <a href="https://www.facebook.com" target="_blank" class="hover:text-blue-500">
                <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 5 3.68 9.12 8.44 9.88v-6.99H7.9v-2.89h2.54V9.47c0-2.5 1.5-3.88 3.78-3.88 1.1 0 2.24.2 2.24.2v2.46h-1.26c-1.24 0-1.63.77-1.63 1.56v1.87h2.77l-.44 2.89h-2.33v6.99C18.32 21.12 22 17 22 12z"></path>
                </svg>
            </a>
            <a href="https://www.twitter.com" target="_blank" class="hover:text-blue-500">
                <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M22.46 6c-.77.35-1.6.58-2.46.69a4.28 4.28 0 0 0 1.88-2.37c-.84.5-1.77.86-2.77 1.06a4.27 4.27 0 0 0-7.29 3.89 12.14 12.14 0 0 1-8.81-4.47 4.28 4.28 0 0 0 1.32 5.71 4.21 4.21 0 0 1-1.93-.53v.05a4.27 4.27 0 0 0 3.43 4.18 4.25 4.25 0 0 1-1.93.07 4.28 4.28 0 0 0 3.99 2.96A8.56 8.56 0 0 1 2 19.54a12.09 12.09 0 0 0 6.56 1.93c7.87 0 12.17-6.5 12.17-12.15 0-.18 0-.36-.01-.54A8.68 8.68 0 0 0 24 4.56c-.88.39-1.83.65-2.82.77a4.2 4.2 0 0 0 1.86-2.33z"></path>
                </svg>
            </a>
            <a href="https://www.instagram.com" target="_blank" class="hover:text-blue-500">
                <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M12 2.16c3.2 0 3.58.01 4.85.07 1.17.05 1.95.24 2.4.4.59.23 1.01.51 1.45.95.44.44.72.86.95 1.45.16.45.34 1.23.4 2.4.06 1.27.07 1.65.07 4.85s-.01 3.58-.07 4.85c-.05 1.17-.24 1.95-.4 2.4-.23.59-.51 1.01-.95 1.45-.44.44-.86.72-1.45.95-.45.16-1.23.34-2.4.4-1.27.06-1.65.07-4.85.07s-3.58-.01-4.85-.07c-1.17-.05-1.95-.24-2.4-.4a3.995 3.995 0 0 1-1.45-.95 3.995 3.995 0 0 1-.95-1.45c-.16-.45-.34-1.23-.4-2.4C2.17 15.58 2.16 15.2 2.16 12s.01-3.58.07-4.85c.05-1.17.24-1.95.4-2.4.23-.59.51-1.01.95-1.45.44-.44.86-.72 1.45-.95.45-.16 1.23-.34 2.4-.4C8.42 2.17 8.8 2.16 12 2.16m0-2.16C8.69 0 8.25 0 7.04.07c-1.22.06-2.08.27-2.83.57-.77.31-1.43.7-2.09 1.35-.66.66-1.04 1.32-1.35 2.09-.3.75-.51 1.61-.57 2.83C.08 8.25 0 8.69 0 12s.08 3.75.2 4.96c.06 1.22.27 2.08.57 2.83.31.77.7 1.43 1.35 2.09.66.66 1.32 1.04 2.09 1.35.75.3 1.61.51 2.83.57C8.25 23.92 8.69 24 12 24s3.75-.08 4.96-.2c1.22-.06 2.08-.27 2.83-.57.77-.31 1.43-.7 2.09-1.35.66-.66 1.04-1.32 1.35-2.09.3-.75.51-1.61.57-2.83.12-1.21.2-1.65.2-4.96s-.08-3.75-.2-4.96c-.06-1.22-.27-2.08-.57-2.83-.31-.77-.7-1.43-1.35-2.09-.66-.66-1.32-1.04-2.09-1.35-.75-.3-1.61-.51-2.83-.57C15.75.08 15.31 0 12 0z"></path>
                    <circle cx="12" cy="12" r="3.2"></circle>
                </svg>
            </a>
        </div>
    </div>

    <div class="text-center mt-4 text-gray-400">
        <p>&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
    </div>
</footer>
