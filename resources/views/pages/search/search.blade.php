<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-semibold mb-6">نتائج البحث</h1>

        @if($blogs->isEmpty())
            <div class="text-gray-500 text-center">
                <p>لم يتم العثور على مدونات لبحثك.</p>
            </div>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($blogs as $blog)
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                        <img src="{{ asset('storage/' . $blog->images[0]) }}" alt="{{ $blog->title }}" class="w-full h-56 object-cover">
                        <div class="p-6">
                            <h2 class="text-xl font-bold mb-2">{{ $blog->title }}</h2>
                            <p class="text-gray-600 mb-4">{{ Str::limit($blog->content, 100) }}</p>
                            <a href="{{ route('blogs.show', $blog->slug) }}" class="text-blue-500 hover:underline">اقرأ المزيد</a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-8">
                <div class="bg-white text-black p-4 rounded-lg shadow-md">
                    {{ $blogs->links() }}
                </div>
            </div>
        @endif
    </div>
</x-app-layout>
