
<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet'>

<style>
li {
    float: left;
}
    </style>

<section class="relative h-72 bg-laravel flex flex-col justify-center align-center text-center space-y-4 mb-4">
    <!-- Background -->
    <div class="absolute top-0 left-0 w-full h-full opacity-10 bg-no-repeat bg-center"></div>

    <div class="z-10">
        <!-- Navigation Bar -->
        {{-- <nav class="navbar fixed top-0 left-0 w-full bg-white shadow-lg">
            <!-- Move "Post Job" button to the right -->
            <a href="/listings/create" class="absolute top-2 right-4 bg-black text-white py-2 px-5 rounded-md">Post Job</a>
            
            <!-- Buttons on the right -->
            <ul class="flex space-x-6 mr-6 text-lg ml-auto">
                @auth
                <li style="float:right">
                    <a href="/listings/manage" class="">Manage Listings</a>
                </li>
                <li style="float:right">
                    <form class="inline" method="POST" action="/logout" onsubmit="return confirmLogout()">
                        @csrf
                        <button type="submit" class="">Logout</button>
                    </form>
                </li>
                @else
                <li>
                    <a href="/register" class="btn btn-primary">Register</a>
                </li>
                <li>
                    <a href="/login" class="btn btn-primary">Login</a>
                </li>
                @endauth
            </ul>
        </nav> --}}

        <!-- Text Content -->
        <p class="text-lg text-gray-300 font-medium my-4">
            Find your dream remote job without the hassle 💼🔍
        </p>

        <!-- Search Form -->
        <div>
            @include('partials._search')
        </div>
    </div>
</section>

        
        





