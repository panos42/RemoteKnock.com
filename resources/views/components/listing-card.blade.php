<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
<style>

body, html {
        margin: 0;
        padding: 0;
        width: 100%;
        height: 100%;
    }

    .rounded-lg {
        background: #333333; 
        color: white;
        width: 100%;
        display: flex;
        flex-direction: column;
        height: auto;
        padding-left: 10px;
        padding-right: 10px; 
        border: 1px solid rgb(139, 139, 139); /* Change this line to modify the border color */
        border-radius: 15px;
        /* align-items: center; 
        justify-content: center;  */
    }

    .rounded-lg:hover{
        background: #252525;
    }


    /* .circular-logo {
        width:20%;
        height: 20%;
        border-radius: 50%;
        object-fit: contain; 
    } */



    .date-card{
            font-size:1.25rem;
        }

    .text-sm {
        font-size: 0.875rem;
    }

    .circular-logo {
        width: 7rem;
        height: 7rem;
        border-radius: 25%;
        object-fit: contain; 
        align-items: center;
        justify-content: center;
        /* padding-right: 10px; */
        margin:auto;
  
    }



    .company_title:hover{
        text-decoration: underline;
    }



    @media (max-width: 767px) {

    .rounded-lg {
        max-width: 100%; 
        margin: 10px auto;
        padding-left: 10px;
        padding-right: 10px; 
        
    }


    .circular-logo {
        /* padding-right: 50x; */
        min-height: 5rem;
        min-width: 5rem;
        width: 4rem;
        height: 4rem;
        border-radius: 25%; 
        object-fit: contain;
        padding-right: 2rem;
    }

    td.circular-logo {
        min-width: 58.8667;
        /* width: 58.866px; */
    }



    .tags-cell {
        display: none;
    }

    
    /* Adjust date alignment */
    .date-cell {
        text-align: right;
    }
    }




/* td.px-4 {
    padding: 0;
    display: flex;
    justify-content: flex-start;
} */

/* Center content vertically within td elements */

td.px-4 {
/* width: 100%; */
padding: 0; 
justify-content: flex-start;

}

.rounded-lg table {
width: 100%;
table-layout: fixed;


}

.rounded-lg td {
vertical-align: top;
padding: 10px;
}

</style>





@props(['listing'])

@php
    // Import Carbon class
    use Carbon\Carbon;
@endphp



<x-card class="rounded-lg" onclick="window.location='/listings/{{$listing->id}}';" style="cursor: pointer;">
    {{-- <div class="rounded-lg">   --}}
        <table>
        <tr>
            <td class="circular-logo" style="vertical-align: middle;">
                <img class="circular-logo " src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png')}}" alt="" />
            </td>
            <td class="px-4">
          
                <h3 class="job_title font-awesome" style="max-width: calc(100% - 20px);"> <!-- Adjust the value based on your padding -->
                    {{$listing->title}}
                </h3>
                <div class="company_title">
                    {{$listing->company}}
                </div>
                <div class="flex items-center"> 
                    <div class="gradient_border_card ml-4">
                        <div class="location_card">

                    <div class="location_name">
                        {{$listing->location}}
                    </div>
                    </div>
                    </div>

                    <div class="gradient_border_card ml-4">
                        <div class="salary_card">
                            <span class="salary">{{ $listing->min_salary }}</span> - <span class="salary">{{ $listing->max_salary }}</span>💸
                        </div>
                    </div>
                </div>
                
                
            </td>
            <td class="px-5 hidden md:table-cell tags-cell" style="width: 341.533px;  overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">
                <x-listing-tags :tagsCsv="$listing->tags" />
            </td>
            
            
            <td class="px-5" style="width: 92.8px;"> 
                <div class="date_card" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">
                    {{ Carbon::parse($listing->created_at)->diffForHumans() }}
                </div>
            </td>
        </tr>
    </table>
    {{-- </div> --}}
</x-card>




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