
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>RemoteKnock - Resume Builder</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('/css/general.css') }}" rel="stylesheet">    

    <link rel="shortcut icon" type="image/x-icon" href="{{ url('images/favicon.png') }}">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>


<style>

.w3-bar-block .w3-bar-item {
  font-size: 1.5rem;
  width: 100%;
  display: block;
  padding: 8px 16px;
  text-align: left;
  border: none;
  white-space: normal;
  float: none;
  outline: 0;
}

.w3-button:hover {
  color: #000 !important;
  background-color: #ccc !important;
}

.w3-btn, .w3-button {
  border: none;
  display: inline-block;
  padding: 8px 16px;
  vertical-align: middle;
  overflow: hidden;
  text-decoration: none;
  color: inherit;
  background-color: inherit;
  text-align: center;
  cursor: pointer;
  white-space: nowrap;
}

.w3-xlarge {
  font-size: 24px !important;
}

.w3-teal, .w3-hover-teal:hover {
  color: #fff !important;
  background-color: #009688 !important;
}

button::-moz-focus-inner, [type="button"]::-moz-focus-inner, [type="reset"]::-moz-focus-inner, [type="submit"]::-moz-focus-inner {
  border-style: none;
  padding: 0;
}
.w3-sidebar {
  height: 100%;
  width: 300px;
  background-color: #fff;
  position: fixed !important;
  z-index: 1;
  overflow: auto;
}

.w3-border-right {
  border-right: 1px solid #ccc !important;
}
</style>

</head>
<body style="background-color:#ffffff;">


    <div class="custom-mb-15"> 
        @include('partials._navbar')
    </div>
   <div style="margin: 5rem"></div>
<!-- Sidebar -->
{{-- <div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
  <button onclick="w3_close()" class="w3-bar-item w3-large">Close &times;</button>
  <a href="#" class="w3-bar-item w3-button">Link 1</a>
  <a href="#" class="w3-bar-item w3-button">Link 2</a>
  <a href="#" class="w3-bar-item w3-button">Link 3</a>
</div> --}}

   <!-- Sidebar -->
   <div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
    <button onclick="w3_close()" class="w3-bar-item w3-large">Close &times;</button>
    <a href="#" class="w3-bar-item w3-button" onclick="loadTemplate('resume_1')">Template 1</a>
    <a href="#" class="w3-bar-item w3-button" onclick="loadTemplate('resume_2')">Template 2</a>
    <!-- Add more template links as needed -->
</div>

<button class="w3-button w3-teal w3-xlarge" onclick="w3_open()" id="mySidebar-hamburger">☰</button>

    {{-- @include('cv_templates.resume_1') --}}

    {{-- <button class="download_button" onclick="generate_pdf()">
      <span class="download_button-content">Download </span>
  </button> --}}
  <button class="download_button" onclick="downloadHTML()">
    <span class="download_button-content">Download as HTML</span>
  </button>

  <button class="download_button" onclick="downloadPDF()">
    <span class="download_button-content">Download as PDF</span>
  </button>


  <form action="{{route('checkout')}}" method="POST">
    @csrf
    <button>Checkout</button>
  </form>
  

    <!-- Template Card -->
    <div class="template-card" id="template-card">

    </div>




  <script>
    function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
        document.getElementById("mySidebar-hamburger").style.display = "none";

    }

    function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
        document.getElementById("mySidebar-hamburger").style.display = "block";

    }

//     function loadTemplate(templateFileName) {
//     const templateCard = document.getElementById("template-card");

//     fetch(`/cv-builder/cv_templates/${templateFileName}`)
//         .then(response => response.json())
//         .then(data => {
//             templateCard.innerHTML = data.template;
//         })
//         .catch(error => console.error("Error loading template: " + error));
// }

function loadTemplate(templateFileName) {
    const templateCard = document.getElementById("template-card");

    fetch(`/cv-builder/${templateFileName}`)
        .then(response => response.text())  // Change response type to text
        .then(templateContent => {
            templateCard.innerHTML = templateContent;
        })
        .catch(error => console.error("Error loading template: " + error));
}



function downloadHTML() {
    const templateCard = document.getElementById("template-card");

    // Get the HTML content inside the template card
    const htmlContent = templateCard.innerHTML;

    // Create a Blob containing the HTML content
    const blob = new Blob([htmlContent], { type: "text/html" });

    // Create a URL for the Blob
    const url = URL.createObjectURL(blob);

    // Create an anchor element for downloading
    const a = document.createElement("a");
    a.href = url;
    a.download = "modified_template.html";

    // Trigger a click event on the anchor to initiate the download
    a.click();

    // Clean up by revoking the URL
    URL.revokeObjectURL(url);
}


// function downloadPDF() {
//     const templateCard = document.getElementById("template-card");

//     // Get the HTML content inside the template card
//     const htmlContent = templateCard.innerHTML;

//     // Send the HTML content to the server via AJAX
//     $.ajax({
//         url: '/generate-pdf', // Modify the URL to match your route
//         type: 'POST',
        
//         data: {
//             htmlContent: htmlContent,
//             _token: "{{ csrf_token() }}"        },
        
//         success: function (response) {
//             // The server should return the PDF file as a response
//             // You can handle the download on the client-side
//             // or use a similar approach to initiate the download
//             // by creating an anchor element and simulating a click event.
//         },
//         error: function (error) {
//             console.error('Error:', error);
//         }
//     });
// }

function downloadPDF() {
    const templateCard = document.getElementById("template-card");
    const htmlContent = templateCard.innerHTML;

    $.ajax({
        url: '/generate-pdf',
        type: 'POST',
        data: {
            htmlContent: htmlContent,
            _token: "{{ csrf_token() }}"
        },
        success: function (response) {
            // Create a Blob containing the PDF content
            const blob = new Blob([response], { type: 'application/pdf' });

            // Create a URL for the Blob
            const url = URL.createObjectURL(blob);

            // Create an anchor element for downloading
            const a = document.createElement('a');
            a.href = url;
            a.download = 'modified_template.pdf';

            // Trigger a click event on the anchor to initiate the download
            a.click();

            // Clean up by revoking the URL
            URL.revokeObjectURL(url);
        },
        error: function (error) {
            console.error('Error:', error);
        }
    });
}



</script>




<style>
.template-card{
  width: auto;
  border-radius: 2rem;
  justify-content: center;
  align-items: center;
  box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
}

.download_button {
  position: relative;
  overflow: hidden;
  height: 3rem;
  padding: 0 2rem;
  border-radius: 1.5rem;
  background: #3d3a4e;
  background-size: 400%;
  color: #fff;
  border: none;
}

.download_button:hover::before {
  transform: scaleX(1);
}

.download_button-content {
  position: relative;
  z-index: 1;
}

.download_button::before {
  content: '';
  position: absolute;
  /* top: 0; */
  left: 0;
  transform: scaleX(0);
  transform-origin: 0 50%;
  width: 100%;
  height: inherit;
  border-radius: inherit;
  background: linear-gradient(
    82.3deg,
    rgba(150, 93, 233, 1) 10.8%,
    rgba(99, 88, 238, 1) 94.3%
  );
  transition: all 0.475s;
}

</style>
    
</body>
</html>
