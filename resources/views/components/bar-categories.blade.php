@php
    $categories = App\Services\Facades\CategoryFacade::get()['categories'];
@endphp

<div class="container mx-auto mt-[80px] md:px-0 px-6">
    <div class="flex flex-row gap-4 whitespace-nowrap overflow-x-scroll">
        @foreach ($categories as $category)
            <div>
                <a href="{{ route('category.show', $category->slug) }}">
                    <h1 class="text-md font-bold bg-blue-200 px-8 py-4 rounded-lg  my-10">{{ $category->title }}</h1>
                </a>
            </div>
        @endforeach
    </div>
</div>