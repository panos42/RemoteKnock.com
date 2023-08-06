<!DOCTYPE html>
<html>
<head>
    <style>
        /* Center the search bar */
        .search-container {
            text-align: center;
            padding-bottom: 20px; /* Add padding from the bottom */
        }

        /* Invisible box to center the search bar */
        .invisible-box {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 60px; /* Increased height to make the search bar bigger */
        }

        /* Styles for the search bar */
        .InputContainer {
            width: 100%; /* Use full width on small screens */
            max-width: 1000px; /* Increase the maximum width */
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 15px;
            overflow: hidden;
            cursor: pointer;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.075);
        }

        .search-input {
            width: 100%; /* Use full width on small screens */
            height: 50px; /* Increased height to make the search input taller */
            border: none;
            outline: none;
            caret-color: rgb(101, 101, 101);
            background-color: rgb(255, 255, 255);
            padding: 10px;
            border-radius: 15px;
            letter-spacing: 0.8px;
            color: rgb(19, 19, 19);
            font-size: 13.4px;
        }

        /* Media query for smaller screens */
        @media only screen and (max-width: 768px) {
            .search-input {
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
                <input placeholder="Search for jobs..." id="searchInput" class="search-input" name="search" type="text">
            </div>
        </form>
    </div>

    <script>
        function performSearch(tag) {
            const searchInput = document.getElementById('searchInput');
            searchInput.value = tag;
            // You can add additional code here to trigger the search action
            // For now, we'll just log the tag to the console
            console.log('Searching for:', tag);
        }
    </script>
</body>
</html>
