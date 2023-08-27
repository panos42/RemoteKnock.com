

<!DOCTYPE html>
<html lang="en">
    <head>
       
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        @vite('resources/css/app.css')
        {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" > --}}

        <link rel="icon" href="images/favicon.ico" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <script src="//unpkg.com/alpinejs" defer></script>
        
        <title>Remote Knock | Find your dream remote job without the hassle</title>
        
        
    </head>
         <!-- Change the background color here -->  

    <body class="mb-48" style="background-color:#222222;">
        <main >
            {{$slot}}
         </main>
         {{-- <main style="max-width: 100%; padding: 0 15px; margin: 0 auto;"> <!-- Add max-width and centering styles -->
            {{$slot}}
        </main> --}}

        <x-flash-message />

    </body>
    <script>
        function confirmLogout() {
            // Display the confirmation prompt
            const confirmed = window.confirm("Are you sure you want to log out?");
    
            // If the user clicks "OK," the form will be submitted (i.e., logout). Otherwise, the form submission is canceled.
            return confirmed;
        }
    </script>
<style>/* Global styles */
    @layer base {
      ul,
      ol {
        list-style: revert;
      }
    }
    </style>
    
    
</html>