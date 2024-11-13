<x-app-layout>
    <div class="container mx-auto px-4 md:px-8 lg:px-28 my-8">      

        <div class="bg-white rounded-lg shadow-lg p-6 md:p-8">
            <h1 class="text-3xl md:text-4xl font-extrabold text-blue-900 mb-4 leading-tight">
                {{ $blog->title }}
            </h1>


            @if(!empty($blog->images) && is_array($blog->images))
                <div class="blog-images mb-4">
                    <div class="image-gallery grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                        @foreach($blog->images as $image)
                            <img src="{{ asset('storage/' . $image) }}" alt="Blog Image" class="w-full h-auto rounded-lg shadow-md object-cover">
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


        <div class="mt-8">
            <h2 class="text-xl font-semibold mb-4">(10 comments)</h2>

            <form method="POST" action="#" class="mt-6 mb-10">
                @csrf
                <div class="mb-4">
                    <input type="text" name="name" class="w-full border border-gray-300 rounded-lg p-2" placeholder="Your Name" required>
                </div>
                <div class="mb-4">
                    <input type="email" name="email" class="w-full border border-gray-300 rounded-lg p-2" placeholder="Your Email" required>
                </div>
                <div class="mb-4">
                    <textarea name="content" rows="4" class="w-full border border-gray-300 rounded-lg p-2" placeholder="Add your comment here..." required></textarea>
                </div>
                <button type="submit" class="mt-2 bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700">
                    Submit Comment
                </button>
            </form>

            @foreach([1, 2, 3, 4, 5] as $comment)
                <div class="bg-gray-200 rounded-lg p-4 mb-4">
                    <div class="flex justify-between items-center">
                        <span class="font-semibold text-gray-800">zobir</span>
                        <span class="text-sm text-gray-500">17/06/2023</span>
                    </div>
                    <p class="mt-2 text-gray-700">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur, accusantium.</p>
                </div>
            @endforeach

        </div>
    </div>
</x-app-layout>
