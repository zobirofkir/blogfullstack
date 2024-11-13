<div class="container mx-auto">
    <div class="flex justify-center items-center w-full bg-white border border-gray-200 shadow-lg rounded-lg overflow-hidden transition-all duration-300 ease-in-out md:px-10 px-4">
        <div class="flex flex-wrap justify-between  items-center w-full">
    
    
            <div class="w-full md:w-1/2 p-6 overflow-hidden">
                <div id="imageSlider" class="flex transition-transform duration-500 ease-in-out max-w-[50%] gap-4">
                    @foreach ([1, 2, 3, 4, 5] as $item)
                    <div class="image-item w-full flex-shrink-0 relative">
                        <img
                            src="https://img.freepik.com/photos-premium/oiseau-bleu-camera-tete-affiche-qui-dit_893847-6239.jpg?semt=ais_hybrid"
                            alt="Image"
                            class="object-cover rounded-lg shadow-lg w-full h-full transition-transform duration-300 ease-in-out"
                        />
                        <div class="absolute bottom-4 left-4 text-white font-semibold text-xl bg-black bg-opacity-50 p-2 rounded-md">
                            Example Text
                        </div>
                    </div>
                @endforeach
    
            </div>
    
                <div class="flex justify-between gap-4 mt-10">
                    <button id="prevButton" class="px-4 py-2 bg-gray-600 text-white rounded-md hover:bg-blue-500 transition-colors duration-300 ease-in-out">Previous</button>
                    <button id="nextButton" class="px-4 py-2 bg-gray-600 text-white rounded-md hover:bg-blue-500 transition-colors duration-300 ease-in-out">Next</button>
                </div>
            </div>
    
    
            <div class="flex md:flex-col flex-wrap md:gap-8 gap-6 w-full md:w-1/2 p-6 overflow-x-auto transition-all duration-300 ease-in-out">
                @foreach ([1, 2, 3, 4, 5] as $item)
                    <div class="bg-gray-50 hover:bg-gray-100 rounded-lg p-5 w-full transition-all transform hover:scale-105 hover:shadow-md duration-300 ease-in-out">
                        <a href="#" class="flex flex-row items-center gap-6">
                            <h1 class="text-blue-600 font-semibold text-lg md:text-xl">
                                11/24
                            </h1>
                            <p class="text-lg text-gray-700 font-medium leading-relaxed line-clamp-2 md:line-clamp-3">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, iste error. Maxime, pariatur aliquid nostrum...
                            </p>
                        </a>
                    </div>
                @endforeach
            </div>
    
        </div>
    </div>    
</div>