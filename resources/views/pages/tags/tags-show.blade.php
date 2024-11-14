<x-app-layout>
    <div class="container mx-auto py-10">
        @if($blogs->isNotEmpty())
            <div class="bg-white py-4 my-10 md:px-0 px-4">
                <div class="container mx-auto">
                    <div class="max-w-full mx-auto rounded-lg overflow-hidden my-10">
                        <hr>
                        <br>
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                            @foreach ($blogs as $blog)
                                <a href="{{ route('blogs.show', $blog->slug) }}">
                                    <div class="relative w-full group">
                                        <img
                                            src="{{ asset('storage/'.$blog->images[0]) }}"
                                            alt="{{ $blog->title }} image"
                                            class="w-full h-64 object-cover rounded-lg border-black border-2"
                                        />
                                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent p-4 opacity-100 lg:opacity-0 lg:group-hover:opacity-100 transition-opacity duration-300">
                                            <h2 class="text-white text-2xl font-semibold">{{ $blog->title }}</h2>
                                            <p class="text-white text-sm mt-1">{{ Str::limit($blog->description, 20) }}</p>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>    
                </div>
            </div>
        @else
            <p class="text-center text-gray-700">No blogs found for this tag yet.</p>
        @endif
    </div>
</x-app-layout>
