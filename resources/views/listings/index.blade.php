<x-layout>
    @include('partials._navbar')
    @include('partials._hero')

    <div class="container mx-auto px-4 py-8">
        <div class="max-w-screen-lg mx-auto">
            @unless(count($listings) == 0)
                @foreach($listings as $listing)
                    <div class="mb-2"> <!-- Adjusted margin to reduce the gap -->
                        <x-listing-card :listing="$listing" />
                    </div>
                @endforeach
            @else
                <p class="text-center">No listings found</p>
            @endunless
        </div>

        <div class="mt-6 p-4">
            {{$listings->links()}}
        </div>
    </div>
</x-layout>