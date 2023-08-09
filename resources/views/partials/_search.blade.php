<!DOCTYPE html>
<html>
<head>
    <style>

        .input {
        width: 1000px;
        /* max-width: 220px; */
        height: 45px;
        padding: 12px;
        border-radius: 12px;
        border: 1.5px solid lightgrey;
        outline: none;
        transition: all 0.3s cubic-bezier(0.19, 1, 0.22, 1);
        box-shadow: 0px 0px 20px -18px;
        }

        .input:hover {
        border: 2px solid lightgrey;
        box-shadow: 0px 0px 20px -17px;
        }

        .input:active {
        transform: scale(0.95);
        }

        .input:focus {
        border: 2px solid grey;
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
            <div class="InputContainer">
                <input
                    placeholder="Search for jobs..."
                    id="searchInput"
                    class="input"
                    name="search"
                    type="text"
                >
                <input
                    type="text"
                    name="min_salary"
                    placeholder="Min Salary"
                    value="{{ request('min_salary') }}"
                >
                <button type="submit">Search</button>
            </div>
        </form>
        
    </div>


</body>
</html>
