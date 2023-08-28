<link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;700;800&display=swap" rel="stylesheet">


<!doctype html>

<head>

    <!-- ... Other meta tags and stylesheets ... -->

    <!-- Include Quill from CDN -->
    {{-- <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet"> --}}
    {{-- <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script> --}}
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>


</head>


<body>
<x-layout>
    {{-- @include('partials._search') --}}
    @include('partials._navbar')
    @include('partials._hero')

    <a href="/" class="inline-block text-white ml-4 mb-4">
        <i class="fa-solid fa-arrow-left"></i> Back
    </a>

    <div>
        <x-card class="whole_card">
            <div>
                <div class="card-content">
                <img class=" w-48 mr-6 md:block" src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png')}}" alt=""/>
                <h3 class="job-title">{{$listing->title}}</h3>
                <div class="job-company">{{$listing->company}}</div>
                <x-listing-tags :tagsCsv="$listing->tags" />

                <div class="job-location">
                {{$listing->location}} 
                </div>

                <div class="border border-gray-200 w-full mb-6"></div>



                <div class="listing-views">👀 {{$listing->listing_views}} views</div>

                </div>
                <div>
                    
                    <div>
                        <div class="actions" style="margin-top: 20px;"> <!-- Add margin-top for spacing -->
                            <a href="mailto:{{$listing->email}}" class="contact-employer">Apply Now</a>
                            {{-- <a href="{{$listing->website}}" target="_blank" class="visit-website">Visit Website</a> --}}
                        </div>
                    </div>
                    
                    <div style="margin-top: 20px;"> <!-- Add margin-top for spacing -->
                        <h3 class="description-title">Job Description</h3>
                        <div class="description-font">
                            {!! $listing->description !!}
                        </div>
                    </div>



                    
                </div>
            </div>
        </x-card>
    </div>
</x-layout>

<!-- ... Your existing HTML code ... -->

  <style>/* Global styles */

  .job-company{
    font-size: 1.5rem;
  }

  .job-location{
    font-size: 1.5rem;
  }
  .listing-views{
    font-size: 1.5rem;
  }


.contact-employer {
    display: block;
    width: 80%;
    margin: 0 auto; /* Center horizontally */
    padding: 10px 0; /* Add some vertical spacing */
    text-align: center;
    background-color: #5865f2;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    font-size: 16px;
    font-weight: bold;
}


    .description-title{
        font-size: 2rem;
    }
  @layer base {
    ul,
    ol {
      list-style: revert;
    }
  }

    .description-font {
        font-size: 1.5rem;
        line-height:1.6;
        font-family: Sen, ui-serif, Georgia, Cambria, Times New Roman, Times, serif;
        padding: 0 10px; /* Add padding to both sides */
    }

        /* Center content within the card */
        .card-content {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
    }
    .whole_card{
        background: #222425;
        color: white;
        padding: 20px;
    }

    
    /* Center the logo */
    .logo-container {
        width: 100px;
        height: 100px;
        /* display: flex; */
        justify-content: center;
        align-items: center;
    }

    /* Adjust margin for the job title */
    .job-title {
        font-size: 2rem;
        margin-top: 10px;
        margin-bottom: 5px;
    }
    


            /* Global styles */
            body {
            font-family: 'Sen', sans-serif;
            margin: 0;
            padding: 0;
        }
        
        /* Adjustments for small screens */
        @media (max-width: 768px) {
            .card-content {
                padding: 25px; /* Increase padding for better spacing */
                text-align: left; /* Align text to the left */
            }
            .card-content img {
                width: 25%; /* Make the logo image responsive */
            }
            .job-title {
                margin-top: 25px; /* Increase margin for the job title */
            }
        }

    
    </style>


    

</body>
</html>
