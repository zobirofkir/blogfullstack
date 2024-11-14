<div class="container mx-auto">
    <div class="flex justify-center items-center w-full bg-white border border-gray-200 shadow-lg rounded-lg overflow-hidden transition-all duration-300 ease-in-out md:px-10 px-4">
        <div class="flex flex-wrap justify-between items-center w-full">
    
            <div class="w-full md:w-1/2 p-6 overflow-hidden">
                <div id="imageSlider" class="flex transition-transform duration-500 ease-in-out md:max-w-[75%] max-w-[100%] gap-4">
                    @foreach ($blogs as $blog)
                        <div class="image-item w-full flex-shrink-0 relative">

                            <a href="{{ route('blogs.show', $blog->slug) }}">
                                <img
                                src="{{ asset('storage/' . $blog->images[0]) }}"
                                alt="صورة"
                                class="object-cover rounded-lg shadow-lg w-full h-full transition-transform duration-300 ease-in-out"
                            />
                            </a>
                            <div class="absolute bottom-4 left-4 text-white font-semibold text-xl bg-black bg-opacity-50 p-2 rounded-md">
                                {{ $blog->title }}
                            </div>
                        </div>
                    @endforeach
                </div>
            
                <div class="flex justify-between gap-4 mt-10">
                    <button id="prevButton" class="px-4 py-2 bg-white text-white rounded-md hover:bg-gray-100 transition-colors duration-300 ease-in-out">
                        <i class="fa-solid fa-left-long fa-xl" style="color: #0073ca;"></i>
                    </button>
                    <button id="nextButton" class="px-4 py-2 bg-white text-white rounded-md hover:bg-gray-100 transition-colors duration-300 ease-in-out">
                        <i class="fa-solid fa-right-long fa-xl" style="color: #0073ca;"></i>
                    </button>
                </div>
            </div>
                            
            <div class="flex md:flex-col flex-wrap md:gap-8 gap-6 w-full md:w-1/2 p-6 overflow-x-auto transition-all duration-300 ease-in-out">
                @foreach ($blogs->take(5) as $blog)
                    <div class="bg-gray-50 hover:bg-gray-100 rounded-lg p-5 w-full transition-all transform hover:scale-105 hover:shadow-md duration-300 ease-in-out">
                        <a href="{{ route('blogs.show', $blog->slug) }}" class="flex flex-row items-center gap-6">
                            <h1 class="text-blue-600 font-semibold text-sm md:text-sm">
                                {{$blog->created_at->format('d/m/Y')}}
                            </h1>
                            <p class="text-lg text-gray-700 font-medium leading-relaxed line-clamp-2 md:line-clamp-3">
                                {{Str::limit($blog->description, 50)}}
                            </p>
                        </a>
                    </div>
                @endforeach
            </div>
    
        </div>
    </div>    
</div>
