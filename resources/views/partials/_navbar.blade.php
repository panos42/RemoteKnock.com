<style>
    /* @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;1,400&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;1,400&family=Pacifico&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap'); */
    @font-face {
    font-family: 'VAGRoundedRegular';
    src: url('/fonts/VAG_Rounded_Regular_font.ttf') format('truetype');
    font-weight: bold;
    font-style: normal;
}



    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    
    html {
        font-size: 80.5%;
        font-family: 'Roboto', sans-serif;
    }
    
    /* li {
        list-style: circle;
    }
     */
    a {
        text-decoration: none;
    }
    
    .header{
        border-bottom: 1px solid #E2E8F0;
    }
    
    .navbar {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1rem 1.5rem;
        background-color: #27292c ; 
        z-index: 1000; 
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); 
    }
    


    /* Styling for the post job button */
.post_job_btn {
    font-size: 1.3rem;

    background-color: #5865F2;
    color: white;
    border-radius: 0.375rem; /* You can adjust this value */
    padding: 1rem 1.75rem; /* Adjust padding as needed */
}
    
    
    .hamburger {
        display: none;
    }
    
    .bar {
    display: block;
    width: 25px;
    height: 3px;
    margin: 5px auto;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    background-color: white;
    border-radius: 2px; /* Add this property for rounded edges */
}
    
    .nav-menu {
        /* padding: 20px; */
        list-style-type: none; /* This removes the bullets/dots */
        display: flex;
        justify-content: space-between;
        align-items: center;
        z-index: 1000; /* A higher value than the hero section */
    }

    .nav-menu.active{
        padding: 20px;
    }

    .nav-item {
        font-family: 'VAGRoundedRegular', sans-serif;
        list-style-type: none; /* This removes the bullets/dots */
        margin-left: 5rem;
        font-size: 1.3rem;
        color:white;
    }
    
    .nav-link {
    font-size: 1.5rem;
    font-weight: 400;
    color: #ffffff;
    }
    
    .nav-link:hover{
        color: white;
    }
    
    /* .nav-logo {
    font-family: 'Poppins', sans-serif;
    font-size: 1.8rem;
    font-weight: 500;
    color: #ffffff;
    } */
    .nav-logo {
    font-family: 'VAGRoundedRegular', sans-serif; /* Use the custom font with a fallback */
    font-size: 2.2rem;
    font-weight: 500;
    color: #ffffff;
}


     
    
    @media only screen and (max-width: 768px) {
    .nav-menu {
        color: white;
        position: fixed;
        left: -100%;
        top: 5rem;
        flex-direction: column;
        background-color: #36393e;
        width: 100%;
        justify-content: center; /* Vertically center the items */
        border-radius: 10px;
        text-align: center;
        transition: 0.3s;
        box-shadow:
            0 10px 27px rgba(0, 0, 0, 0.05);
    }

    .nav-menu.active {
        left: 0;
    }
    .nav-menu.active .nav-link {
        color: white; /* Set the color to white */
    }
            
    .nav-item {
    list-style-type: none;
    margin: 1rem 0; /* Adjust the margin values */
    font-size: 1.3rem;
    color: white;
    
    }
    .nav-item {
    list-style-type: none;
    margin: 1rem 0; /* Adjust the vertical margin as needed */
    font-size: 1.3rem;
    }

    
    .hamburger {
        display: block;
        cursor: pointer;
    }

    .hamburger.active .bar:nth-child(2) {
        opacity: 0;
    }

    .hamburger.active .bar:nth-child(1) {
        transform: translateY(8px) rotate(45deg);
    }

    .hamburger.active .bar:nth-child(3) {
        transform: translateY(-8px) rotate(-45deg);
    }

    }
    
    
    </style>    
    
    <header class="header">
        
        <nav class="navbar navbar-expand-lg navbar-light fixed-top mask-custom shadow-0">
            <a href="/" class="nav-logo">remoteknock</a>
            {{-- 🌍 --}}
            
            
            
            
            <ul class="nav-menu">
                {{-- <li class="nav-item">
                    <a href="#" class="nav-link">Services</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Blog</a>
                </li>--}}
            {{-- <li class="nav-item">
                    <a href="#" class="nav-link">About</a>
                </li>   --}}
    
    
                @auth
                <li class="nav-item ">
                    <a href="/listings/manage" class="nav-link">
                        {{-- <i class="fa-solid fa-gear"></i> --}}
                         Manage Listings
                    </a>
                </li>
                <li class="nav-item ml-6">
                    {{-- <form class="inline" method="POST" action="/logout" onsubmit="return confirmLogout()">
                        @csrf
                        <button type="submit" 
                        class="nav-link">
                            <i class="fa-solid fa-door-closed"></i>
                             Logout
                        </button>
                    </form> --}}


                    <form class="inline" method="POST" action="/logout" onsubmit="return confirmLogout()">
                        @csrf
                        <button type="submit" class="nav-link" style="border: none; background: none; cursor: pointer;">
                            <i class="fa-solid fa-door-closed"></i>
                            Logout
                        </button>
                    </form>
                    
                </li>
            @else
                <li class="nav-item  ml-6">
                    <a href="/register" class="nav-link">
                        {{-- <i class="fa-solid fa-user-plus"></i> --}}
                         Register
                    </a>
                </li>
                <li class="nav-item ml-6">
                    <a href="/login" class="nav-link">
                        {{-- <i class="fa-solid fa-arrow-right-to-bracket"></i> --}}
                         Login
                    </a>
                </li>
            @endauth
            
    
                {{-- <li class="nav-item ml-6">
                    <a href="{{ route('about') }}">About</a>
                </li> --}}

                <li class="nav-item ml-6">
                    <a href="/listings/create" class="post_job_btn">Post a Job</a>
               </li>
            </ul>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </header>
    
    
    <script>
    
    const hamburger = document.querySelector(".hamburger");
    const navMenu = document.querySelector(".nav-menu");
    
    hamburger.addEventListener("click", mobileMenu);
    
    function mobileMenu() {
        hamburger.classList.toggle("active");
        navMenu.classList.toggle("active");
    }
    
    const navLink = document.querySelectorAll(".nav-link");
    
    navLink.forEach(n => n.addEventListener("click", closeMenu));
    
    function closeMenu() {
        hamburger.classList.remove("active");
        navMenu.classList.remove("active");
    }
    
    
    </script>