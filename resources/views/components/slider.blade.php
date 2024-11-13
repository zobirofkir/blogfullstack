<div class="flex justify-center w-full bg-white border border-gray-200 shadow-lg rounded-lg overflow-hidden transition-all duration-300 ease-in-out md:px-10 px-4">
    <div class="flex flex-wrap justify-between items-center w-full">

        <div class="w-full md:w-auto p-6">
            <img
                src="https://img.freepik.com/photos-premium/oiseau-bleu-camera-tete-affiche-qui-dit_893847-6239.jpg?semt=ais_hybrid"
                alt="Image"
                class="object-cover rounded-lg shadow-lg w-full h-auto transition-transform hover:scale-105 duration-300 ease-in-out"
            />
        </div>

        
        <div class="flex md:flex-col flex-wrap md:gap-8 gap-6 w-full md:w-1/2 p-6 overflow-x-auto transition-all duration-300 ease-in-out">
            @foreach ([1, 2, 3, 4, 5] as $item)
                <div class="bg-gray-50 hover:bg-gray-100 rounded-lg p-5 w-full transition-transform hover:scale-105 duration-300 ease-in-out">
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
