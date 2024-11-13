<div class="flex justify-center w-full bg-white border border-gray-200 shadow-lg rounded-lg overflow-hidden transition-all duration-300 ease-in-out md:px-10 px-4">
    <div class="flex flex-wrap justify-between items-center w-full">
        <div class="flex md:flex-col flex-wrap md:gap-6 gap-4 w-full md:w-1/2 p-6 overflow-x-auto transition-all duration-300 ease-in-out">
            @foreach ([1, 2, 3, 4, 5] as $item)
                <div class="bg-gray-100 rounded-lg p-4 w-full transition-transform hover:scale-105">
                    <a href="#" class="flex flex-row items-center gap-4">
                        <h1 class="text-blue-500 font-bold text-lg">
                            11/24
                        </h1>
                        <p class="text-lg text-gray-800 font-semibold leading-relaxed whitespace-nowrap overflow-hidden">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, iste error. Maxime, pariatur aliquid nostrum...
                        </p>
                    </a>
                </div>
            @endforeach
        </div>

        <div class="w-full md:w-auto p-4">
            <img
                src="https://img.freepik.com/photos-premium/oiseau-bleu-camera-tete-affiche-qui-dit_893847-6239.jpg?semt=ais_hybrid"
                alt="Image"
                class="object-cover rounded-lg shadow-md w-full h-auto transition-transform hover:scale-105"
            />
        </div>
    </div>
</div>
