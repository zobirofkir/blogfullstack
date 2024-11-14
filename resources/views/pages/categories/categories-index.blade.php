<x-app-layout>
    <div class="container mx-auto px-4 py-8 flex flex-col lg:flex-row">
        <!-- المحتوى الرئيسي -->
        <div class="w-full lg:w-3/4 lg:pr-8">
            <h1 class="text-3xl font-semibold mb-6">الفئات</h1>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($categories as $category)
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                        <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->title }}" class="w-full h-56 object-cover">
                        <div class="p-6">
                            <h2 class="text-xl font-bold mb-2">{{ $category->title }}</h2>
                            <p class="text-gray-600 mb-4">{{ Str::limit($category->description, 100) }}</p>                        
                            <a href="{{ url('/categories', $category->slug) }}" class="text-blue-500 hover:underline">عرض المدونات</a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-8">
                <div class="bg-white text-black p-4 rounded-lg shadow-md flex justify-center">
                    <div class="flex space-x-2">
                        {{ $categories->links('components.pagination') }}
                    </div>
                </div>
            </div>

        </div>

        <!-- الشريط الجانبي -->
        <div class="w-full lg:w-1/4 bg-gray-100 p-6 rounded-lg shadow-lg mt-8 lg:mt-0">
            <h2 class="text-2xl font-semibold mb-4">الفئات الأخيرة</h2>
            @foreach ($categories as $latestCategory)
                <div class="mb-4">
                    <h3 class="text-lg font-bold">{{ Str::limit($latestCategory->title, 20) }}</h3>
                    <a href="{{ url('/categories', $latestCategory->slug) }}" class="flex gap-2">
                        <p class="text-blue-600">
                            {{ $latestCategory->created_at->diffForHumans() }}
                        </p>
                        <p class="text-gray-600">{{ Str::limit($latestCategory->description, 20) }}</p>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
