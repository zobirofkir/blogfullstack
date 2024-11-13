<x-app-layout>
    <div class="container mx-auto px-6 py-8 flex flex-col items-center justify-center bg-gray-50 rounded-lg shadow-xl">
        <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->title }}" class="w-[300px] h-[300px] shadow-lg hover:animate-spin transition duration-300 object-cover rounded-full">
        <h1 class="text-4xl font-extrabold text-center mt-6 text-gray-800">{{ $category->title }}</h1>
        <p class="text-gray-700 mt-3 text-lg text-center">{{ $category->description }}</p>
    </div>
    

        <div class="container mx-auto px-4 py-8">
            <h2 class="text-2xl font-semibold mb-6">Blogs in this Category</h2>
            @if ($category->blogs->isNotEmpty())
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($category->blogs as $blog)
                        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                            <img src="{{ asset('storage/' . $blog->images[0]) }}" alt="{{ $blog->title }}" class="w-full h-56 object-cover">
                            <div class="p-6">
                                <h3 class="text-xl font-bold mb-2">{{ $blog->title }}</h3>
                                <p class="text-gray-600 mb-4">{{ Str::limit($blog->content, 100) }}</p>
                                <a href="{{ route('blogs.show', $blog->slug) }}" class="text-blue-500 hover:underline">Read more</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="text-gray-500">No blogs found in this category.</p>
            @endif

            <div class="mt-8">
                {{ $blogs->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
