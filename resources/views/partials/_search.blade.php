<!DOCTYPE html>
<html>
<head>
    <style>
  @font-face {
    font-family: 'VAGRoundedRegular';
    src: url('/fonts/VAG_Rounded_Regular_font.ttf') format('truetype');
    font-weight: normal;
    font-style: normal;
    }

        /* Add styles for the filter button and icon */
        .filter-button {
            background-color: #007bff; /* Change the button background color */
            color: #fff; /* Text color */
            border: none;
            border-radius: 50%; /* Make the button round */
            width: 40px; /* Adjust the button width as needed */
            height: 40px; /* Adjust the button height as needed */
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
        }

        .filter-icon {
            fill: #fff; /* Icon color */
            width: 24px; /* Adjust the icon size as needed */
            height: 24px; /* Adjust the icon size as needed */
        }

        .invisible-box {
            margin-top: 7%;
            display: flex;
            justify-content: center; /* Center horizontally */
            align-items: center;
            /* height: 20vh; */
        }

         /* .searchInput:active {
        transform: scale(0.95);
        }  */

        .group {
            display: flex;
            line-height: 28px;
            align-items: center;
            position: relative;
            max-width: 1000px;
            margin-bottom: 10px;
        }

        .input-group {
            display: flex;
            flex-direction: row;
            gap: 10px; /* Vertical gap between input fields */
        }

 
        /* .icon {
        position: absolute;
        left: 1rem;
        fill: #9e9ea7;
        width: 1rem;
        height: 1rem;
        } */
        .icon {
            position: absolute;
            left: 1rem;
            top: 50%; /* Vertically center the icon */
            transform: translateY(-50%); /* Adjust for vertical centering */
            fill: #9e9ea7;
            width: 1.5rem; /* Increase icon size */
            height: 1.5rem; /* Increase icon size */
            font-weight: bold; /* Make the icon bold */
        }

        .main-search {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 90%; /* Adjust the width as needed */
            max-width: 100px; /* Set a maximum width if desired */
            margin: 0 auto; /* Center the container horizontally */
            text-align: center;
        }

        .search-container {
            display: flex;
            justify-content: center;
            align-items: center;
            /* height: 100vh; */
        }
          /* Hide the submit button */
    button[type="search_hidden_submit"] {
        display: none;
    }

/*  */

/* styles.css */
.horizontal-scroll-menu {
    width: 1000px;
    background-color: rgba(0, 123, 255, 0.2);
    overflow-x: auto;
    white-space: nowrap;
    background-color: transparent;
    scrollbar-width: thin; /* Set the width of the scrollbar */
    scrollbar-color: #204368 rgba(0, 0, 0, 0.2); /* Set the thumb and track colors */
}


.menu-list {
    background-color: transparent;
    padding: 0;
    margin: 1.5rem;
    list-style: none;
}

.menu-item {
    display: inline-block;
    padding: 7px 15px; /* Adjust padding as needed */
    font-size: 16px; /* Adjust font size as needed */
    cursor: pointer;
    background-color: #24292b;
    border: 1px solid teal;
    align-items: center; /* Center vertically */
    color:#cfcfcf;
    border-radius: 25px; /* Make the items round */
    margin-right: 3px; /* Adjust spacing between items */
}

.menu-item:hover {
    background-color: #1d7aa5; /* Change color on hover */
}

            /* Additional styles for the label */
            .label-text {
            font-family: 'VAGRoundedRegular', sans-serif; 
            width: max-content;
            color: #fff; /* White text color */
            font-size: 3rem; /* Adjust the font size as needed */
            text-align: center; /* Center the text */
            margin-bottom: 2rem; /* Add some space between label and input */
        }

    

        /* Media query for smaller screens */
        @media only screen and (max-width: 768px) {
            .horizontal-scroll-menu{
                width: 350px ;
            }

           

            .filter-button {
                /* Adjust the button size for smaller screens if needed */
                width: 30px;
                height: 30px;
            }

            .filter-icon {
                /* Adjust the icon size for smaller screens if needed */
                width: 20px;
                height: 20px;
            }



        .searchInput {
            width: max-content;
            height: 40px; /* Adjust height for smaller screens */
            font-size: 20px; /* Adjust font size for smaller screens */
        }

        .input-group {                
            flex-direction: column; /* Stack input fields vertically on smaller screens */
            gap: 10px; /* Vertical gap between input fields */
        }

        .search-container {
            display: flex;
            justify-content: center;
            align-items: center;
            padding-top: 80px;
            /* height: 100vh; */
        }

        .group {
            flex-direction: column;
        }

              .label-text {
                font-family: 'VAGRoundedRegular', sans-serif; 

            width: 25rem;
            color: #fff; /* White text color */
            font-size: 1.5rem; /* Adjust the font size as needed */
            text-align: center; /* Center the text */
            margin-bottom: 2rem; /* Add some space between label and input */
        }

        }



        
        ::selection {
    background-color: #16706c; /* Change to the desired text selection color (e.g., green) */
    color: #ffffff; /* Change the text color within the selection */
}

    </style>
</head>
<body>
            

    <div class="invisible-box">


        <form action="/" class="search-container" id="searchForm">
            <div class="main-search">
                

                <label for="searchInput" class="label-text">
                    {{-- Find your dream remote job without the hassle ! --}}
                    Work Anywhere, Thrive Everywhere 
           
                    </label>
                

                <div class="group">

                <svg class="icon" aria-hidden="true" viewBox="0 0 24 24"><g><path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"></path></g></svg>
                <input
                    placeholder="Search for jobs..."
                    id="searchInput"
                    class="searchInput"
                    name="search"
                    type="search"
                    value="{{ request('search') }}"
                >
            </div>
           


            <div class="input-group"> <!-- New input-group container -->
                {{-- <input 
                    name="min_salary"
                    placeholder="Minimum Salary" 
                    type="text" 
                    class="filterInput"
                    value="{{ request('min_salary') }}"
                > --}}
                {{-- <select class="filterInput" name="min_salary">
                    <option value="">💵 Salary</option>
                    <option value="10000">$10.000 per year</option>
                    <option value="20000">$20.000 per year</option>
                    <option value="30000">$30.000 per year</option>
                    <option value="40000">$40.000 per year</option>
                    <option value="50000">$50.000 per year</option>
                    <option value="60000">$60.000 per year</option>
                    <option value="70000">$70.000 per year</option>
                    <option value="80000">$80.000 per year</option>
                    <option value="90000">$90.000 per year</option>
                    <option value="100000">$100.000 per year</option>
                    <option value="110000">$110.000 per year</option>
                    <option value="120000">$120.000 per year</option>
                    <option value="130000">$130.000 per year</option>
                    <option value="140000">$140.000 per year</option>
                    <option value="150000">$150.000 per year</option>
                    <!-- Add more options as needed -->
                </select> --}}

                <input 
                    name="location"
                    placeholder="🌏 Location" 
                    type="search" 
                    class="filterInput"
                    value="{{ request('location') }}"
                >
                <input 
                    name="job_position"
                    placeholder="💼 Position" 
                    type="search" 
                    class="filterInput"
                    value="{{ request('job_position') }}"
                >
                
            </div>
            <div class="horizontal-scroll-menu">
                <ul class="menu-list">

                    <li class="menu-item" onclick="selectMenuItem('Marketing')">🚀 Marketing</li>

                    <li class="menu-item" onclick="selectMenuItem('Media')">🤩 Media</li>

                    <li class="menu-item" onclick="selectMenuItem('Writer')">📝 Writer</li>

                    <li class="menu-item" onclick="selectMenuItem('Sales')">🤑 Sales</li>

                    <li class="menu-item" onclick="selectMenuItem('Teacher')">🎓Teacher</li>

                    <li class="menu-item" onclick="selectMenuItem('Tutor')"> 👨‍🎓 Tutor</li>

                    <li class="menu-item" onclick="selectMenuItem('Education')">🏫 Education</li>

                    <li class="menu-item" onclick="selectMenuItem('AI')">🤖 AI/ML</li>
                          
                    <li class="menu-item" onclick="selectMenuItem('Engineer')">😎 Engineer</li>
                    
                    <li class="menu-item" onclick="selectMenuItem('Blockchain')">🔗 Blockchain</li>

                    <li class="menu-item" onclick="selectMenuItem('Cybersecurity')">🔒 Cybersecurity</li>

                    <li class="menu-item" onclick="selectMenuItem('PHP')">🐘 PHP</li>

                    <li class="menu-item" onclick="selectMenuItem('Finance')">📊Finance</li>

                    <li class="menu-item" onclick="selectMenuItem('Backend')">🗄️ Backend</li>

                    <li class="menu-item" onclick="selectMenuItem('SEO')">SEO</li>

                    <li class="menu-item" onclick="selectMenuItem('LAW')">⚖️Law</li>
                        
                    <!-- Add more list items for additional industries -->
                </ul>


                
            </div>
            <button type="search_hidden_submit"></button>


            {{-- <a class="frontpage-featured-customers" href="/hire-remotely">
<p style="font-size:10px;font-weight:normal;opacity:0.5;margin:0;margin-right:7px;display:inline-block;vertical-align:middle;">
    trusted by
    </p>
    <img style="margin-top:14px;" class="lazyloaded" src="/cdn-cgi/image/height=60,quality=85/https://remoteok.com/assets/microsoft.png?1634054013" height="30" alt="Microsoft" data-src="/cdn-cgi/image/height=60,quality=85/https://remoteok.com/assets/microsoft.png?1634054013">
    <img style="margin-top:16px;" class="lazyloaded" src="/cdn-cgi/image/height=60,quality=85/https://remoteok.com/assets/ibm.png?1691252594" height="30" alt="Ibm" data-src="/cdn-cgi/image/height=60,quality=85/https://remoteok.com/assets/ibm.png?1691252594">
    <img style="margin-top:33px;" class="lazyloaded" src="/cdn-cgi/image/height=60,quality=85/https://remoteok.com/assets/amazon.png?1642846833" height="30" alt="Amazon" data-src="/cdn-cgi/image/height=60,quality=85/https://remoteok.com/assets/amazon.png?1642846833">
    <img style="margin-top:12px;" class="lazyloaded" src="/cdn-cgi/image/height=60,quality=85/https://remoteok.com/assets/scale-ai.png?1686399169" height="30" alt="Scale-Ai" data-src="/cdn-cgi/image/height=60,quality=85/https://remoteok.com/assets/scale-ai.png?1686399169">
    <img style="margin-top:20px;" class="lazyloaded" src="/cdn-cgi/image/height=60,quality=85/https://remoteok.com/assets/cloudflare.png?1635928865" height="30" alt="Cloudflare" data-src="/cdn-cgi/image/height=60,quality=85/https://remoteok.com/assets/cloudflare.png?1635928865">
    <img style="margin-top:20px;" class="lazyloaded" src="/cdn-cgi/image/height=60,quality=85/https://remoteok.com/assets/stripe.png?1634054013" height="30" alt="Stripe" data-src="/cdn-cgi/image/height=60,quality=85/https://remoteok.com/assets/stripe.png?1634054013">
    <img style="margin-top:14px;" class="lazyloaded" src="/cdn-cgi/image/height=60,quality=85/https://remoteok.com/assets/shopify.png?1634054013" height="30" alt="Shopify" data-src="/cdn-cgi/image/height=60,quality=85/https://remoteok.com/assets/shopify.png?1634054013">
    <img style="margin-top:21px;" class="lazyloaded" src="/cdn-cgi/image/height=60,quality=85/https://remoteok.com/assets/ycombinator.png?1634054013" height="30" alt="Ycombinator" data-src="/cdn-cgi/image/height=60,quality=85/https://remoteok.com/assets/ycombinator.png?1634054013">
    <img style="margin-top:18px;" class="lazyloaded" src="/cdn-cgi/image/height=60,quality=85/https://remoteok.com/assets/github.png?1633381266" height="30" alt="Github" data-src="/cdn-cgi/image/height=60,quality=85/https://remoteok.com/assets/github.png?1633381266">
    <img style="margin-top:21px;" class="lazyloaded" src="/cdn-cgi/image/height=60,quality=85/https://remoteok.com/assets/intercom.png?1524913324" height="30" alt="Intercom" data-src="/cdn-cgi/image/height=60,quality=85/https://remoteok.com/assets/intercom.png?1524913324">
    <img style="margin-top:20px;" class="lazyloaded" src="/cdn-cgi/image/height=60,quality=85/https://remoteok.com/assets/upwork.png?1634371831" height="30" alt="Upwork" data-src="/cdn-cgi/image/height=60,quality=85/https://remoteok.com/assets/upwork.png?1634371831">
    <img style="margin-top:17px;" class="lazyloaded" src="/cdn-cgi/image/height=60,quality=85/https://remoteok.com/assets/angellist.png?1642846752" height="30" alt="Angellist" data-src="/cdn-cgi/image/height=60,quality=85/https://remoteok.com/assets/angellist.png?1642846752">
            </a> --}}

            <section id="trusted-by">
                {{-- <div class="container"> --}}
                    <div class="logos">
                        <h2 class="trusted_by_text">Trusted By</h2>

                        <!-- Add your trusted partner logos or images here -->
                        <img src="/images/microsoft_logo.png" alt="Partner 1">
                        <img src="/images/stripe.png" alt="Partner 2">
                        <img src="/images/github.png" alt="Partner 3">
                        <img src="/images/lemonio_logo.png" alt="Partner 3">
                        <img src="/images/scaleai_logo.png" alt="Partner 3">
                        <img src="/images/ycombinator.png" alt="Partner 3">
                        <img src="/images/lime_logo.png" alt="Partner 3">

                        <!-- Add more logos as needed -->
                    </div>
                {{-- </div> --}}
            </section>

            </div>
        </form>
        
    </div>

   
    <script>
        function selectMenuItem(text) {
            // Get the search input element by its id
            var searchInput = document.getElementById('searchInput');
            
            // Set the value of the search input to the selected menu item's text
            searchInput.value = text;
            
            // Trigger the form submission (assuming you have a form with the id 'searchForm')
            document.getElementById('searchForm').submit();
        }
        </script>
        
</body>
</html>


<style>

    .trusted_by_text{
        color: grey;
        font-size: 0.5rem;
    }
         #trusted-by {
            /* background-color: #f8f8f8; */
            padding: 50px 0;
            text-align: center;
        }

        #trusted-by h2 {
            font-size: 1rem;
            margin-bottom: 20px;
            font-family: 'VAGRoundedRegular';
    src: url('/fonts/VAG_Rounded_Regular_font.ttf') format('truetype');
        }

    
/* .logos {
    display: flex;
    justify-content: center;
    align-items: center;
}

.logos img {
    width: 150px; 
    height: 150px;
    object-fit: contain;
    margin: 0 15px;
} */

        .logos {
            display: flex;
            justify-content: center;
            align-items: center;
            /* overflow-x: auto; */
            -webkit-overflow-scrolling: touch;
            padding: 0 15px;
        }

        .logos img {
            min-width: 45px;
            height: 45px;
            object-fit: contain;
            margin: 0 15px;
        }



/* Add this inside your existing media query for smaller screens */
@media only screen and (max-width: 768px) {
    .logos {   
    width: 350px;
     /* display: flex; */
     justify-content: flex-start;

    -webkit-overflow-scrolling: touch; 
    overflow-x: scroll;
    white-space: nowrap;
    background-color: transparent;
     /* scrollbar-width: thin;   */
    scrollbar-color: #00000000 rgba(0, 0, 0, 0);  

    }

    .logos img {
        min-width: 100px; /* Set the minimum desired width */
        height: auto; /* Auto-adjust the height to maintain aspect ratio */
    }
}


</style>
