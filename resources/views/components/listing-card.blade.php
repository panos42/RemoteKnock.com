<style>
    /* ... Other styles ... */


    /* Add a class for text color adaptation */
    .adapt-text-color {
        color: white; /* Default to white text color */
    }

    /* Check the background brightness and set the text color accordingly */
    .adapt-text-color.light-bg {
        color: black; /* For light backgrounds, use black text color */
    }

    /* Add this style block within your Blade template or link to an external CSS file */
    .hover\:bg-gray-100:hover {
        /* Change the background color to light grey on hover */
        background-color: #385873;
    }

    /* If you want to change the initial background color to light grey as well, remove the :hover pseudo-class */
    .hover\:bg-gray-100 {
        background-color: #222222;
    }

    /* Add styles for the tags */
    .tag {
    display: inline-block;
    padding: 4px 8px;
    background-color: #e2e8f0;
    border-radius: 4px;
    margin-right: 4px;
    cursor: pointer;
    font-size: 12px; /* Adjust the font size as per your preference */
    }

    .tag:hover {
        background-color: #a0aec0;
        font-size: 12px; /* Same as the tag class, adjust the font size if needed */
    }

    /* Center the card content */
    .card-container {
    display: flex;
    align-items: center;
    /* justify-content: center; */
    }


    .circular-logo {
        width: 100px;
        height: 100px;
        border-radius: 25%;
        object-fit: contain; /* Add this line to maintain aspect ratio without stretching */
    }

    .text-xl {
        font-size: 1.1rem; /* Adjust the initial font size for the company name */
        max-width: 200px; /* Set a maximum width for the company name container */
    }

    .text-2xl {
        font-size:1.5rem;
        max-width: 200;
    }

    .text-lg{
        font-size:1.2rem;
        max-width: 200;
    }

    .text-sm {
  font-size: 1rem;
  line-height: 1.25rem;
}
    /* td.circular-logo{

    } */

    /* td.px-4{
        max-width: ;
    } */

    /* td.hidden.md\:table-cell {

    } */
    

    /* Add media query for mobile devices */
    @media (max-width: 767px) {
        .circular-logo {
            /* Adjust the size and alignment of the logo on mobile devices */
            width: 5.2rem;
            height: 5.2rem;
            border-radius: 25%; /* Adjust the border-radius to make it a perfect circle */
            object-fit: contain; /* Add this line to maintain aspect ratio without stretching */
        }

        .text-xl {
            font-size: 0.8rem; /* Adjust the font size for the company name on mobile devices */
        }

        .text-2xl {
            font-size: 1.2rem
        }

        .text-lg {
            font-size: 0.7rem
        }


        td.circular-logo {
            min-width: 58.8667;
            /* width: 58.866px; */
        }

        td.px-4 {
            width: 339.833px;
            max-width: 250.833px;
            padding: 0; 
        }

        /* td.hidden.md\:table-cell {
            width: 51.3px;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
        } */
     
        



    }
</style>

@props(['listing'])

@php
    // Import Carbon class
    use Carbon\Carbon;
@endphp

{{-- <x-card class="hover:bg-gray-100 rounded-lg" onclick="window.location='/listings/{{$listing->id}}';" style="cursor: pointer;">
    <div class="flex card-container max-h-32
    ">
        <img class="circular-logo w-48 mr-6 md:w-auto" src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png')}}" alt="" />
        <div>
            <h3 class="text-2xl font-bold adapt-text-color">
                {{$listing->title}}
            </h3>
            <div class="text-xl mb-4 adapt-text-color">{{$listing->company}}</div>
            <div class="text-lg mt-4 adapt-text-color">
                {{$listing->location}}
            </div>
        </div>
        <div class="ml-auto">
            <x-listing-tags :tagsCsv="$listing->tags" />
            <div class="text-sm text-gray-500 mt-2">
                {{ Carbon::parse($listing->created_at)->diffForHumans() }}            </div>
        </div>
    </div>
</x-card> --}}



<x-card class="rounded-lg" onclick="window.location='/listings/{{$listing->id}}';" style="cursor: pointer;">
    <table>
        <tr>
            <td class="circular-logo" style="padding-right: 20px;">
                <img class="circular-logo w-64 h-64 md:w-48 md:h-48 mr-6 md:w-auto" src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png')}}" alt="" />
            </td>
            <td class="px-4" style="width: 426.933px;">
                <h3 class="text-2xl font-bold" style="max-width: 426.933px; overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">
                    {{$listing->title}}
                </h3>
                <div class="text-xl" style="max-width: 300px; overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">
                    {{$listing->company}}
                </div>
                <div class="text-lg" style="max-width: 426.933px; overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">
                    {{$listing->location}}
                </div>

                <div class="card">
                    <div class="card__content">${{$listing->min_salary}} - ${{$listing->max_salary}}💸
                    </div>
                </div>

            </td>
            <td class="px-4 hidden md:table-cell" style="width: 341.533px;  overflow: hidden; white-space: nowrap; text-overflow: ellipsis;"> <!-- Set specific width and truncate content -->
                <x-listing-tags :tagsCsv="$listing->tags" />
            </td>
            <td class="px-4" style="width: 72.8px;"> <!-- Set specific width -->
                <div class="text-sm text-gray-500" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">
                    {{ Carbon::parse($listing->created_at)->diffForHumans() }}
                </div>
            </td>
            {{-- <div class="text-lg" style="max-width: 426.933px; overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">
                
            </div> --}}

            
        </tr>
    </table>
</x-card>

    <style>
.card {
  width: 110px;
  border-radius: 20px;
  padding: 3px;
  display: flex;
  box-shadow: rgba(151, 65, 252, 0.2) 0 15px 30px -5px;
  background-image: linear-gradient(144deg, #AF40FF, #5B42F3 50%, #00DDEB);
  justify-content: center; /* Center horizontally */
  align-items: center; /* Center vertically */
  /* height: auto; */ /* Uncomment this line to use auto height */
}

.card__content {
  text-align: center; /* Center the text within the content */
  color: white; /* Set the text color to white */
  background: rgb(5, 6, 45); /* Background color for the text content */
  border-radius: 17px;
  width: 110%;
  /* height: 100%; */ /* No need to set height in this case */
}

    </style>