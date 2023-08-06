<!DOCTYPE html>
<html lang="en">
    <head>
       
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="images/favicon.ico" />
        <link rel="stylesheet" href="css/app.css">
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />

        <script src="https://cdn.tailwindcss.com"></script>
        <script src="//unpkg.com/alpinejs" defer></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            laravel: "#2e4aff",
                        },
                    },
                },
            };

        </script>
        <title>Remote Knock | Find your dream remote job without the hassle</title>
        
        <style>
                body {
        background-color: #fbfbfe; /* Change this color to the desired background color */
    }
            .btn {
                display: inline-block;
                padding: 10px 20px;
                border-radius: 4px;
                font-size: 16px;
                font-weight: bold;
                text-decoration: none;
                text-align: center;
                transition: color 0.2s ease, border-color 0.2s ease;
                background-color: #0070f3; /* Default button color */
                color: #fff; /* Default text color */
                border: 2px solid #0070f3; /* Default border color */
            }
        
            .btn:hover {
                color: #034ea3; /* Text color on hover */
                background-color: #034ea3; /* Background color on hover */
                border-color: #034ea3; /* Border color on hover */
                color: #fff; /* Default text color */
            }
        
            .btn-secondary {
                color: #333; /* Default text color for secondary button */
                background-color: #f0f0f0; /* Default button color for secondary button */
                border-color: #f0f0f0; /* Default border color for secondary button */
            }
        
            .btn-secondary:hover {
                color: #6e6e6e; /* Text color on hover for secondary button */
                background-color: transparent; /* Background color on hover for secondary button */
                border-color: #f0f0f0; /* Border color on hover for secondary button */
            }
        </style>
        
        
        
    </head>
    <body class="mb-48">
        {{-- <nav class="navbar fixed top-0 left-0 w-full bg-white shadow-lg">            <a href="/">
                <img class="w-24" src="{{asset('images/logo2.png')}}" alt="" class="logo">
            </a>
            <ul class="flex space-x-6 mr-6 text-lg">
                @auth
                <li>
                    <span class="font-bold uppercase">
                        Welcome {{auth()->user()->name}}
                    </span>
                </li>
                <li>
                    <a href="/listings/manage" class="btn btn-primary">
                        <i class="fa-solid fa-gear"></i> Manage Listings
                    </a>
                </li>
                <li>
                    <form class="inline" method="POST" action="/logout" onsubmit="return confirmLogout()">
                        @csrf
                        <button type="submit" class="btn btn-secondary">
                            <i class="fa-solid fa-door-closed"></i> Logout
                        </button>
                    </form>
                </li>
                @else
                <li>
                    <a href="/register" class="btn btn-primary">
                        <i class="fa-solid fa-user-plus"></i> Register
                    </a>
                </li>
                <li>
                    <a href="/login" class="btn btn-secondary">
                        <i class="fa-solid fa-arrow-right-to-bracket"></i> Login
                    </a>
                </li>

                
                @endauth
            </ul>
        </nav> --}}
        

        <main >
            {{$slot}}
         </main>

        {{-- <footer
            class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-24 mt-24 opacity-90 md:justify-center"
        >
            <p class="ml-2">Copyright &copy; 2023, All Rights reserved</p>

            <a
                href="/listings/create"
                class="absolute top-1/3 right-10 bg-black text-white py-2 px-5"
                >Post Job</a>
        </footer> --}}


        <x-flash-message />


        


    </body>
    <script>
        function confirmLogout() {
            // Display the confirmation prompt
            const confirmed = window.confirm("Are you sure you want to log out?");
    
            // If the user clicks "OK," the form will be submitted (i.e., logout). Otherwise, the form submission is canceled.
            return confirmed;
        }
    </script>

    
    
</html>