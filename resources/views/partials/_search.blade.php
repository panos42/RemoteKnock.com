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
        <form action="/" class="search-container" id="jobSearchForm">
            <div class="main-search">
                <div class="group">
                    <svg class="icon" aria-hidden="true" viewBox="0 0 24 24">
                        <!-- Add your SVG path here -->
                    </svg>
                    <input
                        placeholder="Search for jobs..."
                        class="searchInput"
                        name="search"
                        type="text"
                        id="searchInput"
                    >
                </div>
                <div class="input-group">
                    <select class="filterInput" name="min_salary">
                        <!-- Add your options here -->
                    </select>
                    <input 
                        name="location"
                        placeholder="🌏 Location" 
                        type="text" 
                        class="filterInput"
                    >
                    <input 
                        name="job_position"
                        placeholder="💼 Position" 
                        type="text" 
                        class="filterInput"
                    >
                </div>
            </div>
        </form>
    </div>

    <script>
        // Get the form element by its ID
        const form = document.getElementById("jobSearchForm");

        // Get all filter input elements
        const filterInputs = document.querySelectorAll(".filterInput");

        // Add event listeners to each filter input
        filterInputs.forEach(input => {
            input.addEventListener("change", function() {
                // Automatically submit the form when there's a change in any filter
                form.submit();
            });
        });

        // Add an event listener to the search input
        const searchInput = document.getElementById("searchInput");
        searchInput.addEventListener("input", function() {
            // Implement your search logic here based on the search input value
            // You can update the search results without submitting the form
            // For example, you can send an AJAX request to fetch and display search results
            const searchValue = searchInput.value;
            // Implement your search logic here
        });
    </script>
</body>
</html>
