<!DOCTYPE html>
<html>
<head>
    <style>


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
            margin-top: 5%;
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
    background-color: rgba(0, 123, 255, 0.2); /* Transparent blue background */    overflow-x: auto; /* Enable horizontal scrolling */
    white-space: nowrap; /* Prevent line breaks for list items */
    background-color: transparent;
}

.menu-list {
    background-color: transparent;
    padding: 0;
    margin: 1.5rem;
    list-style: none;
}

.menu-item {
    display: inline-block;
    padding: 10px 15px; /* Adjust padding as needed */
    font-size: 16px; /* Adjust font size as needed */
    cursor: pointer;
    background-color: #204368;
    color: #fff;
    border-radius: 25px; /* Make the items round */
    margin-right: 3px; /* Adjust spacing between items */
}

.menu-item:hover {
    background-color: rgb(30, 97, 168); /* Change color on hover */
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
        }
    </style>
</head>
<body>
    <div class="invisible-box">


        <form action="/" class="search-container" id="searchForm">
            <div class="main-search">
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
                    <li class="menu-item" onclick="selectMenuItem('AI')">AI/ML</li>
<!-- Add similar onclick attributes to other menu items -->
<li class="menu-item" onclick="selectMenuItem('Cybersecurity')">Cybersecurity</li>
<li class="menu-item" onclick="selectMenuItem('Education')">Education</li>
<li class="menu-item" onclick="selectMenuItem('Marketing')">Marketing</li>
<li class="menu-item" onclick="selectMenuItem('Engineer')">Engineer</li>
<li class="menu-item" onclick="selectMenuItem('Tutor')">Tutor</li>
<li class="menu-item" onclick="selectMenuItem('Sales')">Sales</li>

<li class="menu-item" onclick="selectMenuItem('Freelance')">Freelance</li>
<li class="menu-item" onclick="selectMenuItem('Backend')">Backend</li>
<li class="menu-item" onclick="selectMenuItem('Sales')">Sales</li>

<li class="menu-item" onclick="selectMenuItem('Teacher')">Teacher</li>
<li class="menu-item" onclick="selectMenuItem('Sales')">Sales</li>
<li class="menu-item" onclick="selectMenuItem('Media')">Media</li>
<li class="menu-item" onclick="selectMenuItem('Writer')">Writer</li>
<li class="menu-item" onclick="selectMenuItem('Blockchain')">Blockchain</li>
<li class="menu-item" onclick="selectMenuItem('SEO')">SEO</li>

              
                    <!-- Add more list items for additional industries -->
                </ul>
            </div>
            <button type="search_hidden_submit"></button>
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
