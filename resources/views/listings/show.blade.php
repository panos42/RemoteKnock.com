<!doctype html>
<html>
<head>
    <!-- ... Other meta tags and stylesheets ... -->

    <!-- Include Quill from CDN -->
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <!-- ... Other script tags ... -->
</head>
<body>
<x-layout>
    {{-- @include('partials._search') --}}
    @include('partials._navbar')
    @include('partials._hero')

    <a href="/" class="inline-block text-black ml-4 mb-4">
        <i class="fa-solid fa-arrow-left"></i> Back
    </a>

    <div class="mx-4">
        <x-card class="p-10">
            <div class="flex flex-col items-center justify-center text-center">
                <img class="hidden w-48 mr-6 md:block" src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png')}}" alt=""/>
                <h3 class="text-2xl mb-2">{{$listing->title}}</h3>
                <div class="text-xl font-bold mb-4">{{$listing->company}}</div>
                <x-listing-tags :tagsCsv="$listing->tags" />

                <div class="text-lg my-4">
                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}} 
                </div>

                <div class="border border-gray-200 w-full mb-6"></div>

                <div class="job-container">
                    <div class="job-details">
                        <img class="company-logo" src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png')}}" alt="">
                        <div class="job-info">
                            <h3 class="job-title">{{$listing->title}}</h3>
                            <div class="company-name">{{$listing->company}}</div>
                            <div class="tags">
                                <!-- Add your tags here -->
                            </div>
                            <div class="location">
                                <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                            </div>
                            <div class="actions">
                                <a href="mailto:{{$listing->email}}" class="contact-employer">Contact Employer</a>
                                <a href="{{$listing->website}}" target="_blank" class="visit-website">Visit Website</a>
                            </div>
                        </div>
                    </div>
                    <div class="job-description">
                        <h3 class="description-title">Job Description</h3>
                        <div class="description-content">
                            {!! $listing->description !!}
                        </div>
                    </div>
                </div>
            </div>
        </x-card>
    </div>
</x-layout>


    <style>
      /* CSS for the job container */

        .job-container {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            margin: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 20px;
        }

        /* CSS for the job details section */
        .job-details {
            /* display: flex; */
            align-items: center;
            margin-bottom: 20px;
        }

        .company-logo {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin-right: 20px;
        }

        .job-title {
            font-size: 24px;
            margin-bottom: 5px;
        }

        .company-name {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .tags {
            margin-bottom: 10px;
            /* Add your tag styles here */
        }

        .location {
            font-size: 16px;
            margin-bottom: 10px;
        }

        .actions a {
            display: inline-block;
            margin-right: 10px;
            padding: 8px 16px;
            border-radius: 8px;
            color: #fff;
            text-decoration: none;
        }

        .contact-employer {
            background-color: #007bff;
        }

        .visit-website {
            background-color: #000;
        }

        /* CSS for the job description section */
        .job-description {
            text-align: left;
        }

        .description-title {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .description-content {
            font-size: 16px;
            line-height: 1.6;
            /* Add your description content styles here */
        }

    </style>




</body>
</html>
