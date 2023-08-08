<style>
@import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;1,400&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;1,400&family=Pacifico&display=swap');
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html {
    font-size: 80.5%;
    font-family: 'Roboto', sans-serif;
}

li {
    list-style: none;
}

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
    background-color: white; /* Add a background color if needed */
    z-index: 1000; /* A higher value than other content */
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Add a shadow for depth */
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
    background-color: #101010;
}

.nav-menu {
    
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 1000; /* A higher value than the hero section */
}

.nav-item {
    margin-left: 5rem;
    font-size: 1.3rem;
}

.nav-link{
    font-size: 1.6rem;
    font-weight: 400;
    color: #475569;
}

.nav-link:hover{
    color: #482ff7;
}

.nav-logo {
    font-family: 'Pacifico', cursive; 
        font-size: 1.8rem;
    font-weight: 500;
    color: #482ff7;
} 







@media only screen and (max-width: 768px) {
    .nav-menu {
        position: fixed;
        left: -100%;
        top: 5rem;
        flex-direction: column;
        background-color: #fff;
        width: 100%;
        border-radius: 10px;
        text-align: center;
        transition: 0.3s;
        box-shadow:
            0 10px 27px rgba(0, 0, 0, 0.05);
    }

    .nav-menu.active {
        left: 0;
    }

    .nav-item {
        margin: 2.5rem 0;
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
    
    <nav class="navbar">
        <a href="/" class="nav-logo">RemoteKnock</a>
        
        
        
        
        <ul class="nav-menu">
            {{-- <li class="nav-item">
                <a href="#" class="nav-link">Services</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Blog</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">About</a>
            </li> --}}


            @auth
            <li>
                <a href="/listings/manage" class="nav-item ml-6">
                    {{-- <i class="fa-solid fa-gear"></i> --}}
                     Manage Listings
                </a>
            </li>
            <li>
                <form class="inline" method="POST" action="/logout" onsubmit="return confirmLogout()">
                    @csrf
                    <button type="submit" class="nav-item">
                        {{-- <i class="fa-solid fa-door-closed"></i> --}}
                         Logout
                    </button>
                </form>
            </li>
        @else
            <li>
                <a href="/register" class="nav-item ml-6">
                    {{-- <i class="fa-solid fa-user-plus"></i> --}}
                     Register
                </a>
            </li>
            <li>
                <a href="/login" class="nav-item ml-6">
                    {{-- <i class="fa-solid fa-arrow-right-to-bracket"></i> --}}
                     Login
                </a>
            </li>
        @endauth
        


            <li class="nav-item">
                {{-- <a href="#" class="nav-link">Contact</a> --}}
                 <!-- Move "Post Job" button to the right -->
                 <a href="/listings/create" class="bg-black text-white py-4 px-7 rounded-md">For Employers</a>
            
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