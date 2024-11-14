@foreach ($blogs->take(1) as $blog)
    <div class="bg-gray-900">
        <div class="flex container mx-auto md:p-10 flex-col md:px-0 px-4">
            <div class="flex font-black text-white text-2xl sticky z-30 p-2 bg-gray-900">
                {{$blog->title}}
            </div>
            <div class="flex flex-col md:flex-row md:py-4 p-2 md:p-0 rounded">
                <a href="{{ route('blogs.show', $blog->slug) }}" class="md:w-1/2 flex flex-col min-h-96 relative border bg-cover rounded" style="background-image: url({{asset('storage/'.$blog->images[0])}});">
                    <div class="text-xl font-bold text-white p-2 absolute bottom-0 z-30">
                        {{Str::limit($blog->description, 20)}}
                    </div>
                    <div class="h-full w-full top-0 left-0 bg-gradient-to-t from-gray-900 to-transparent absolute z-20"></div>
                </a>
                <div class="md:w-1/2 flex flex-wrap">
                    @foreach ($blogs->skip(1)->take(4) as $blog)
                        <div class="basis-1/2 flex flex-col">
                            <div class="p-2 flex flex-col">
                                <div class="h-56 group w-full rounded shadow relative hover:shadow-xl ease-in-out duration-300 border-2 hover:border-gray-900" style="background: url({{asset('storage/'.$blog->images[0])}}); background-size: cover;">
                                    <a href="{{ route('blogs.show', $blog->slug) }}" class="flex flex-col text-xs font-bold text-white text-lg absolute h-full bottom-0 right-0 w-full">
                                        <div class="flex flex-grow overflow-hidden items-center justify-between">
                                            <div class="flex h-full"></div>
                                        </div>
                                        <div class="flex group-hover:from-black ease-in-out duration-300 bg-gradient-to-t from-gray-900 to-transparent p-4">
                                            {{Str::limit($blog->description, 20)}}
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endforeach