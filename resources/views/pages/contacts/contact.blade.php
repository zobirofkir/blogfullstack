<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-semibold mb-6">اتصل بنا</h1>

        <form action="{{ url('/contacts') }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-bold mb-2">الاسم</label>
                <input type="text" id="name" name="name" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-bold mb-2">البريد الإلكتروني</label>
                <input type="email" id="email" name="email" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div class="mb-4">
                <label for="subject" class="block text-gray-700 font-bold mb-2">الموضوع</label>
                <input type="text" id="subject" name="subject" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div class="mb-4">
                <label for="message" class="block text-gray-700 font-bold mb-2">الرسالة</label>
                <textarea id="message" name="message" rows="5" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required></textarea>
            </div>

            <div class="flex justify-end">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition duration-200">إرسال الرسالة</button>
            </div>
        </form>
    </div>
</x-app-layout>
