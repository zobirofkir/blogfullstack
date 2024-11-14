<x-app-layout>
    <div class="container mx-auto px-4 md:px-8 lg:px-28 my-8">      

        <div class="bg-white rounded-lg shadow-lg p-6 md:p-8">
            <h1 class="text-3xl md:text-4xl font-extrabold text-blue-900 mb-4 leading-tight">
                {{ $blog->title }}
            </h1>

            @if(!empty($blog->images) && is_array($blog->images))
                <div class="blog-images mb-4">
                    <div class="image-gallery flex flex-row space-x-4 overflow-x-auto py-2">
                        @foreach($blog->images as $image)
                            <img src="{{ asset('storage/' . $image) }}" alt="Blog Image" class="w-auto h-auto rounded-lg shadow-md object-cover">
                        @endforeach
                    </div>
                </div>
            @else
                <p>No images available for this blog.</p>
            @endif

            <div class="text-sm text-gray-700 mb-2">
                <span class="font-semibold text-gray-800">By:</span> 
                {{ $blog->user->name }}
            </div>

            <div class="flex flex-col mb-4">
                <p class="text-base md:text-lg text-gray-800 mb-4 leading-relaxed break-words">
                    {{ $blog->description }}
                </p>
            </div>

            <div class="flex flex-col md:flex-row justify-between items-center border-t border-gray-300 pt-4 mt-4">
                <a href="{{ url('/') }}" class="text-blue-600 hover:underline font-medium mb-2 md:mb-0">
                    Back
                </a>
            </div>
        </div>

        <div class="bg-white py-4 my-10 md:px-0 px-4">
            <div class="container mx-auto">
                <div class="max-w-full mx-auto rounded-lg overflow-hidden my-10 ">
                    <h1 class="text-3xl font-bold text-gray-900 mb-4">Related Articles</h1>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                        @foreach ($relatedBlogs as $relatedBlog)
                        <a href="{{ route('blogs.show', $relatedBlog->slug) }}">
                            <div class="relative w-full group">
                                <img
                                    src="{{ asset('storage/' . $relatedBlog->images[0]) }}"
                                    alt="Blog Image"
                                    class="w-full h-64 object-cover rounded-lg border-gray-900 border-2"
                                />
                                <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent p-4 opacity-100 lg:opacity-0 lg:group-hover:opacity-100 transition-opacity duration-300">
                                    <h2 class="text-white text-2xl font-semibold">{{ $relatedBlog->title }}</h2>
                                    <p class="text-white text-sm mt-1">{{ Str::limit($relatedBlog->description, 20) }}</p>
                                </div>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>    
            </div>
        </div>

        <div class="mt-8">
            <h2 class="text-xl font-semibold mb-4">{{ $blog->comments->count() }} Comments</h2>

            <form method="POST" action="{{ route('comments.store') }}" class="mt-6 mb-10">
                @csrf
                <input type="hidden" name="blog_id" value="{{ $blog->id }}">

                <div class="mb-4">
                    <input type="text" name="name" class="w-full border border-gray-300 rounded-lg p-2" placeholder="Your Name" required>
                </div>
                <div class="mb-4">
                    <input type="email" name="email" class="w-full border border-gray-300 rounded-lg p-2" placeholder="Your Email" required>
                </div>
                <div class="mb-4">
                    <textarea name="comment" rows="4" class="w-full border border-gray-300 rounded-lg p-2" placeholder="Add your comment here..." required></textarea>
                </div>
                <button type="submit" class="mt-2 bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700">
                    Send
                </button>
            </form>

            @foreach ($blog->comments->reverse() as $comment)
                <div class="bg-gray-200 rounded-lg p-4 mb-4">
                    <div class="flex justify-between items-center">
                        <span class="font-semibold text-gray-800">{{ $comment->name }}</span>
                        <span class="text-sm text-gray-500">{{ $comment->created_at->diffForHumans() }}</span>
                    </div>
                    <p class="mt-2 text-gray-700">{{ $comment->comment }}</p>
                </div>
            @endforeach

        </div>
    </div>
</x-app-layout>
