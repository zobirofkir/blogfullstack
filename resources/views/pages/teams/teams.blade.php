<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-semibold mb-6">Our Team</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($teams as $team)
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="{{ asset('storage/' . $team->image) }}" alt="{{ $team->name }}" class="w-full h-auto object-cover hover:rotate-12 hover:scale-105 transition duration-500">
                    <div class="p-6">
                        <h2 class="text-xl font-bold mb-2">{{ $team->name }}</h2>
                        <p class="text-gray-600 mb-2">{{ $team->semi_description }}</p>
                        <p class="text-gray-600 mb-4">{{ Str::limit($team->description, 20) }}</p>
                        <div class="flex space-x-4">
                            @if($team->social_media_one)
                                <a href="{{ $team->social_media_one }}" target="_blank" class="text-blue-500 hover:underline">LinkedIn</a>
                            @endif
                            @if($team->social_media_two)
                                <a href="{{ $team->social_media_two }}" target="_blank" class="text-blue-500 hover:underline">Twitter</a>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
