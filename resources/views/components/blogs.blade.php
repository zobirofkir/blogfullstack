<div class="bg-gray-900 py-4 my-10 md:px-0 px-4">
    <div class="container mx-auto">
        <div class="max-w-full mx-auto rounded-lg overflow-hidden my-10 ">
            <h1 class="text-3xl font-bold text-white mb-4">Blogs</h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                @foreach ($blogs->take(8) as $blog)
                <a href="{{route('blogs.show', $blog->slug)}}">
                    <div class="relative w-full group">
                        <img
                            src="{{ asset('storage/' . $blog->images[0]) }}"
                            alt="Nature Image"
                            class="w-full h-64 object-cover rounded-lg border-white border-2"
                        />
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent p-4 opacity-100 lg:opacity-0 lg:group-hover:opacity-100 transition-opacity duration-300">
                            <h2 class="text-white text-2xl font-semibold">{{$blog->title}}</h2>
                            <p class="text-white text-sm mt-1">{{Str::limit($blog->description, 80)}}</p>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>    
    </div>
</div>
