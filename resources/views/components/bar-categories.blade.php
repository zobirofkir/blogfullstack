@php
    $categories = App\Services\Facades\CategoryFacade::get()['categories'];
    $currentSlug = request()->segment(2);
@endphp

<div class="container mx-auto mt-[80px] md:px-0 px-6 md:block hidden">
    <div class="flex flex-row gap-4 whitespace-nowrap overflow-x-scroll">
        @foreach ($categories as $category)
            <div>
                <a href="{{ url('/categories', $category->slug) }}">
                    <h1 class="text-md font-bold px-8 py-4 rounded-lg my-10
                        {{ $category->slug === $currentSlug ? 'bg-blue-500 text-white' : 'bg-blue-200' }}">
                        {{ $category->title }}
                    </h1>
                </a>
            </div>
        @endforeach
    </div>
</div>
