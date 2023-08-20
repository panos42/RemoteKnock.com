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

    <a href="/" class="inline-block text-black ml-4 mb-4">
        <i class="fa-solid fa-arrow-left"></i> Back
    </a>

    <div>
        <x-card>
            <div>
                <div class="card-content">
                <img class=" w-48 mr-6 md:block" src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png')}}" alt=""/>
                <h3 class="text-2xl mb-2">{{$listing->title}}</h3>
                <div class="text-xl font-bold mb-4">{{$listing->company}}</div>
                <x-listing-tags :tagsCsv="$listing->tags" />

                <div>
                {{$listing->location}} 
                </div>

                <div class="border border-gray-200 w-full mb-6"></div>

                <div>
                           
                    <div class="actions">
                        <a href="mailto:{{$listing->email}}" class="contact-employer">Apply Now</a>
                        <a href="{{$listing->website}}" target="_blank" class="visit-website">Visit Website</a>
                    </div>
                </div>

                <div class="text-xl font-awesome mb-4">👀 {{$listing->listing_views}} views</div>

                </div>
                <div>
                    
                    
                    
                    <div>
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
    }

        /* Center content within the card */
        .card-content {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    
    /* Center the logo */
    .logo-container {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    /* Adjust margin for the job title */
    .job-title {
        margin-top: 10px;
        margin-bottom: 5px;
    }
    

    
    </style>


    

</body>
</html>
