<x-layout>
    <div class="custom-mb-15"> 

    @include('partials._navbar')
    </div>

    {{-- <div class="custom-mb-15">
        @include('partials._hero')
    </div> --}}

    <div>
        @include('partials._search') <!-- Adjust the margin value as needed -->
    </div>

    <div class="container mx-auto px-4 py-8">
        <div class="main_container max-w-screen-lg mx-auto">
            @unless(count($listings) == 0)
                @foreach($listings as $listing)
                    <div class="mb-5"> <!-- Adjusted margin to reduce the gap -->
                        <x-listing-card :listing="$listing" />
                    </div>
                @endforeach
            @else
                <p class="text-center">No listings found</p>
            @endunless
        </div>

        <div class="mt-6 p-4 ">
            {{$listings->links()}}
        </div>
    </div>
<style>
    .custom-mb-15 {
        margin-bottom: 6rem; /* Adjust the value as needed */
    }

    @media (max-width: 768px) {

        .custom-mb-15 {
        margin-bottom: 3rem; /* Adjust the value as needed */
    }
    }


</style>

    
</x-layout>

