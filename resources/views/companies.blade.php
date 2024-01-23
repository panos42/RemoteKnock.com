<x-layout>
    <x-card class="p-10">
        <style>

            .card-title{
                color: white;
                font-size: 2rem;
            }

            .card-img-top{
                height: 100px;
                width: 100px;
            }
            .company-card {
                /* display: flex; */
                line-height: 28px;
                align-items: center;
                position: relative;
                max-width: 100px;
                margin-bottom: 10px;
            }

            .company-info {
                text-align: center;
                margin-right: auto;
                margin-left: auto;
            }

            .custom-link, .custom-button {
                margin-top: 10px;
                margin-right: 10px;
            }
        </style>

        <header>
            <h1 class="text-3xl manage-listings-title font-bold my-6 uppercase" style="color: #ccc">
                Manage Companies
            </h1>
        </header>

        <button class="back_button">
            <svg height="16" width="16" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1024 1024">
                <path d="M874.690416 495.52477c0 11.2973-9.168824 20.466124-20.466124 20.466124l-604.773963 0 188.083679 188.083679c7.992021 7.992021 7.992021 20.947078 0 28.939099-4.001127 3.990894-9.240455 5.996574-14.46955 5.996574-5.239328 0-10.478655-1.995447-14.479783-5.996574l-223.00912-223.00912c-3.837398-3.837398-5.996574-9.046027-5.996574-14.46955 0-5.433756 2.159176-10.632151 5.996574-14.46955l223.019353-223.029586c7.992021-7.992021 20.957311-7.992021 28.949332 0 7.992021 8.002254 7.992021 20.957311 0 28.949332l-188.073446 188.073446 604.753497 0C865.521592 475.058646 874.690416 484.217237 874.690416 495.52477z"></path>
            </svg>
            <a href="/" class="back_text"> Go Back</a>
        </button>

        <div class="grid grid-cols-1 gap-4">
            {{-- Loop through companies --}}
            @unless($companies->isEmpty())
                @foreach($companies as $company)
                    <div class="col">
                        <div class="card h-100 company-card">
                            <img src="{{ $company->logo ? asset('storage/' . $company->logo) : asset('path/to/placeholder-logo.jpg') }}" class="card-img-top" alt="{{ $company->name }} Logo">
                            <div class="card-body company-info">
                                <h5 class="card-title">{{ $company->name }}</h5>
                                <div class="button-container mt-4">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                {{-- No companies found --}}
                <div class="col">
                    <div class="card h-100 border-gray-300">
                        <div class="card-body">
                            <p class="card-text text-center">No Companies Found</p>
                        </div>
                    </div>
                </div>
            @endunless
        </div>
    </x-card>
</x-layout>
