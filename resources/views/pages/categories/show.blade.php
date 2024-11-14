<x-app-layout>
    <div class="container mx-auto px-6 py-8 flex flex-col lg:flex-row items-center justify-center bg-gray-50 rounded-lg shadow-xl">
        <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->title }}" class="w-[300px] h-[300px] shadow-lg hover:animate-spin transition duration-300 object-cover rounded-full">
        <h1 class="text-4xl font-extrabold text-center mt-6 text-gray-800">{{ $category->title }}</h1>
        <p class="text-gray-700 mt-3 text-lg text-center">{{ $category->description }}</p>
    </div>

    <div class="container mx-auto px-4 py-8 flex flex-col lg:flex-row">
        <!-- المحتوى الرئيسي -->
        <div class="w-full lg:w-3/4 lg:pr-8">
            <h2 class="text-2xl font-semibold mb-6">المدونات في هذه الفئة</h2>
            @if ($category->blogs->isNotEmpty())
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($category->blogs as $blog)
                        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                            <img src="{{ asset('storage/' . $blog->images[0]) }}" alt="{{ $blog->title }}" class="w-full h-56 object-cover">
                            <div class="p-6">
                                <h3 class="text-xl font-bold mb-2">{{ $blog->title }}</h3>
                                <p class="text-gray-600 mb-4">{{ Str::limit($blog->content, 100) }}</p>
                                <a href="{{ route('blogs.show', $blog->slug) }}" class="text-blue-500 hover:underline">اقرأ المزيد</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="text-gray-500">لا توجد مدونات في هذه الفئة.</p>
            @endif

            <div class="mt-8">
                <div class="bg-white text-black p-4 rounded-lg shadow-md flex justify-center">
                    <div class="flex space-x-2">
                        {{ $blogs->links('components.pagination') }}
                    </div>
                </div>
            </div>
        </div>

        <!-- الشريط الجانبي: المدونات الأخيرة -->
        <div class="w-full lg:w-1/4 bg-gray-100 p-6 rounded-lg shadow-lg mt-8 lg:mt-0">
            <h2 class="text-2xl font-semibold mb-4">المدونات الأخيرة</h2>
            @foreach ($blogs as $latestBlog)
                <div class="mb-4">
                    <h3 class="text-lg font-bold">{{ $latestBlog->title }}</h3>
                    <a href="{{ route('blogs.show', $latestBlog->slug) }}" class="flex gap-2">
                        <p class="text-blue-600">
                            {{ $latestBlog->created_at->diffForHumans() }}
                        </p>
                        <p class="text-gray-600">{{ Str::limit($latestBlog->description, 20) }}</p>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
