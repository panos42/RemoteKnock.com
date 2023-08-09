<!DOCTYPE html>
<html>
<head>
    <style>

         .input:active {
        /* transform: scale(0.95); */
        } 

        .group {
        display: flex;
        line-height: 28px;
        align-items: center;
        position: relative;
        max-width: 1000px;
        }

        .input {
        width: 1000px;
        height: 40px;
        line-height: 28px;
        padding: 0 1rem;
        padding-left: 2.5rem;
        border: 2px solid transparent;
        border-radius: 8px;
        outline: none;
        background-color: #f3f3f4;
        color: #0d0c22;
        transition: .3s ease;
        }

        .input::placeholder {
        color: #9e9ea7;
        }

        .input:focus, input:hover {
        outline: none;
        border-color: rgba(14, 207, 250, 0.604);
        background-color: #fff;
        box-shadow: 0 0 0 4px rgb(234 76 137 / 10%);
        }

        .icon {
        position: absolute;
        left: 1rem;
        fill: #9e9ea7;
        width: 1rem;
        height: 1rem;
        }


        .main-search {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 90%; /* Adjust the width as needed */
    max-width: 1000px; /* Set a maximum width if desired */
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
            .input {
                width: 300px;
                height: 40px; /* Adjust height for smaller screens */
                font-size: 12px; /* Adjust font size for smaller screens */
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
                    id="searchInput"
                    class="input"
                    name="search"
                    type="text"
                >
            </div>
            <div class="input-group"> <!-- New input-group container -->
                <input 
                    name="min_salary"
                    placeholder="Minimum Salary" 
                    type="text" 
                    class="input2"
                    value="{{ request('min_salary') }}"
                >
                <input 
                    name="location_filter"
                    placeholder="Location" 
                    type="text" 
                    class="input2"
                    value="{{ request('location') }}"
                >
                <input 
                    name="job_position"
                    placeholder="Position" 
                    type="text" 
                    class="input2"
                    value="{{ request('job_position') }}"
                >
            </div>
            <button type="submit">Search</button>
            </div>
        </form>
        
    </div>


</body>
</html>
