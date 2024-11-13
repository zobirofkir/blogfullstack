<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-semibold mb-6">Categories</h1>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($categories as $category)
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->title }}" class="w-full h-56 object-cover">
                    <div class="p-6">
                        <h2 class="text-xl font-bold mb-2">{{ $category->title }}</h2>
                        <p class="text-gray-600 mb-4">{{ Str::limit($category->description, 100) }}</p>                        
                        <a href="{{ route('category.show', $category->slug) }}" class="text-blue-500 hover:underline">View Blogs</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
