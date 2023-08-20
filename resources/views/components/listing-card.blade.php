<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

<style>
    body, h1, h2, h3, h4, h5, h6, p {
    font-family: 'Poppins', sans-serif;
    }
    .rounded-lg{
        /* background-color: #0e0f1e; */
        /* border:#5B42F3; */
         /* width: 1200px; */
         /* display: flex;
        align-items: center;
        justify-content: center; */
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


    /* Center the card content */
    /* Center the card content */
    .card-container {
        display: flex;
        align-items: center;
        justify-content: center; /* Add this line to center horizontally */
    }

    .circular-logo {
        width: 7rem;
        height: 7rem;
        border-radius: 25%;
        object-fit: contain; /* Add this line to maintain aspect ratio without stretching */
    }

    .text-xl {
        /* color: white; */
        font-size: 1rem; /* Adjust the initial font size for the company name */
        max-width: 200px; /* Set a maximum width for the company name container */
    }

    .text-2xl {
        /* color: white; */
        font-size:1.5rem; /*title*/
        max-width: 200;
    }

    .text-lg{
        /* color: white; */
        font-size:1rem; /* Location */
        max-width: 200;
    }

    .text-sm {
        font-size: 1rem; /* time */
        line-height: 1.25rem;
    }

    td.px-4 {
        width: 512px;
        max-width: 900px;
        padding: 0; 
    }

    .text-2xl:hover {
    text-decoration: underline;
    }

    .text-xl:hover{
        text-decoration: underline;
    }

    /* Add media query for mobile devices */
    @media (max-width: 767px) {
    .circular-logo {
        /* Adjust the size and alignment of the logo on mobile devices */
        min-height: 3rem;
        min-width: 3rem;
        width: 5.2rem;
        height: 5.2rem;
        border-radius: 25%; /* Adjust the border-radius to make it a perfect circle */
        object-fit: contain; /* Add this line to maintain aspect ratio without stretching */
    }

    .text-xl {
        font-size: 0.9rem; /* Adjust the font size for the company name on mobile devices */
    }

    .text-2xl {
        font-size: 1.3rem; /*title*/
        
    }

    /* .text-lg {
        font-size: 0.9rem
    } */


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



<x-card class="rounded-lg" onclick="window.location='/listings/{{$listing->id}}';" style="cursor: pointer;">
    {{-- <div class="card-container flex justify-center items-center">   --}}
        <table>
        <tr>
            <td class="circular-logo" style="padding-right: 20px;">
                <img class="circular-logo w-64 h-64 md:w-48 md:h-48 mr-6 md:w-auto" src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png')}}" alt="" />
            </td>
            <td class="px-4">
                <h3 class="text-2xl font-awesome" style="max-width: 426.933px; overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">
                    {{$listing->title}}
                </h3>
                <div class="text-xl" style="max-width: 300px; overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">
                    {{$listing->company}}
                </div>
                <div class="flex items-center"> <!-- Flex container to align location and salary -->
                    <div class="card2 ml-4">
                        <div class="card__content2">

                    <div class="text-lg" style="max-width: 200px; overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">
                        {{$listing->location}}
                    </div>
                    </div>
                    </div>

                    <div class="card ml-4">
                        <div class="card__content">
                            <span class="salary">{{ $listing->min_salary }}</span> - <span class="salary">{{ $listing->max_salary }}</span>💸
                        </div>
                    </div>
                </div>
            </td>
            <td class="px-5 hidden md:table-cell" style="width: 341.533px;  overflow: hidden; white-space: nowrap; text-overflow: ellipsis;"> <!-- Set specific width and truncate content -->
                <x-listing-tags :tagsCsv="$listing->tags" />
            </td>
            <td class="px-5" style="width: 72.8px;"> <!-- Set specific width -->
                <div class="text-sm text-gray-500" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">
                    {{ Carbon::parse($listing->created_at)->diffForHumans() }}
                </div>
            </td>
        </tr>
    </table>
    {{-- </div> --}}
</x-card>


    <style>
        .card {
            font-size: 1rem;
            width: 110px;
            border-radius: 20px;
            padding: 3px;
            display: flex;
            box-shadow: rgba(151, 65, 252, 0.2) 0 15px 30px -5px; 
            /* background-image: linear-gradient(144deg, #251430, #5B42F3 50%, #00DDEB); */
            background-image: linear-gradient(144deg,#AF40FF, #5B42F3 50%,#00DDEB);
            justify-content: center; /* Center horizontally */
            align-items: center; /* Center vertically */
            /* height: auto; */ /* Uncomment this line to use auto height */
        }

        .card__content {
            text-align: center; /* Center the text within the content */
            color: white; /* Set the text color to white */
            background: rgb(5, 6, 45); /* Background color for the text content */
            border-radius: 18px;
            width: 110%;
            /* height: 100%; */ /* No need to set height in this case */
        }

/* 
        .card2 {
            width: 90px;
            border-radius: 20px;
            padding: 3px;
            display: flex;
            box-shadow: rgba(151, 65, 252, 0.2) 0 15px 30px -5px;
            background-image: linear-gradient(144deg, #251430, #5B42F3 50%, #00DDEB);

            justify-content: center;
            align-items: center; 
        }

 */

        .card__content2 {
            padding:3px;
            text-align: center; /* Center the text within the content */
            color: white; /* Set the text color to white */
            background: rgb(5, 6, 45); /* Background color for the text content */
            border-radius: 17px;
            width: 110%;
            /* height: 100%; */ /* No need to set height in this case */
        }
        </style>


<!-- Add this script section at the bottom of your template, before the closing </body> tag -->
<!-- Update the formatSalary() function in the script section -->
<script>
    function formatSalary(salary) {
        if (salary >= 1000) {
            return Math.floor(salary / 1000) + 'k';
        } else {
            return salary;
        }
    }

    // Get all elements with class "salary" and format their content
    document.addEventListener('DOMContentLoaded', function() {
        const salaryElements = document.querySelectorAll('.salary');
        salaryElements.forEach(element => {
            const originalSalary = parseFloat(element.textContent);
            if (!isNaN(originalSalary)) {
                element.textContent = '$' + formatSalary(originalSalary);
            }
        });
    });
</script>