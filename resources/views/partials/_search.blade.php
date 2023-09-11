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

        /* Media query for smaller screens */
        @media only screen and (max-width: 768px) {


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
        <form action="/" class="search-container">
            <div class="main-search">
                <div class="group">

                <svg class="icon" aria-hidden="true" viewBox="0 0 24 24"><g><path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"></path></g></svg>
                <input
                    placeholder="Search for jobs..."
                    {{-- id="searchInput" --}}
                    class="searchInput"
                    name="search"
                    type="text"
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
                <select class="filterInput" name="min_salary">
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
                </select>

                <input 
                    name="location"
                    placeholder="🌏 Location" 
                    type="text" 
                    class="filterInput"
                    value="{{ request('location') }}"
                >
                <input 
                    name="job_position"
                    placeholder="💼 Position" 
                    type="text" 
                    class="filterInput"
                    value="{{ request('job_position') }}"
                >
                
            </div>
            <button type="submit">Search</button>
            </div>
        </form>
        
    </div>


</body>
</html>
