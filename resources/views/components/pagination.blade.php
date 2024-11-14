@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-center mt-8">
        <ul class="flex space-x-2 items-center">

            @if ($paginator->onFirstPage())
                <li>
                    <span class="px-4 py-2 bg-white hover:bg-gray-100 text-gray-500 rounded-full cursor-not-allowed transition duration-200">
                        <i class="fa-solid fa-left-long fa-xl" style="color: #0073ca;"></i>
                    </span>
                </li>
            @else
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}" class="px-4 py-2 bg-white text-white rounded-full hover:bg-gray-100 transition duration-200 focus:outline-none focus:ring-2 focus:ring-blue-400">
                        <i class="fa-solid fa-left-long fa-xl" style="color: #0073ca;"></i>
                    </a>
                </li>
            @endif


            @foreach ($elements as $element)

            @if (is_string($element))
                    <li>
                        <span class="px-4 py-2 bg-gray-300 text-gray-500 rounded-full">{{ $element }}</span>
                    </li>
                @endif


                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li>
                                <span class="px-4 py-2 bg-blue-500 text-white rounded-full font-semibold shadow-md transition duration-200">{{ $page }}</span>
                            </li>
                        @else
                            <li>
                                <a href="{{ $url }}" class="px-4 py-2 bg-white text-gray-800 rounded-full hover:bg-blue-100 transition duration-200 focus:outline-none focus:ring-2 focus:ring-blue-400">
                                    {{ $page }}
                                </a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach


            @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}" class="px-4 py-2 bg-white text-white rounded-full hover:bg-gray-100 transition duration-200 focus:outline-none focus:ring-2 focus:ring-blue-400">
                        <i class="fa-solid fa-right-long fa-xl" style="color: #0073ca;"></i>
                    </a>
                </li>
            @else
                <li>
                    <span class="px-4 py-2 bg-white hover:bg-gray-100 text-gray-500 rounded-full cursor-not-allowed transition duration-200">
                        <i class="fa-solid fa-right-long fa-xl" style="color: #0073ca;"></i>
                    </span>
                </li>
            @endif
        </ul>
    </nav>
@endif
