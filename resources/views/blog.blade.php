<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>RemoteKnock - Blog</title>

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=PT+Serif:wght@400;700&display=swap">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('/css/general.css') }}" rel="stylesheet">    

    <link rel="shortcut icon" type="image/x-icon" href="{{ url('images/favicon.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>
</head>
<body>

@include('partials._navbar')

<div class="about-section">
    <h1 class="title">🚀A Step-By-Step Guide on How to Build your CV</h1>
    <p>Building the perfect resume can be tough.
    so we made this guide to help you out!</p>
</div>

<div class="chapter">
    <div id="cv-container">
      {{-- <h1>🤠 CV Writing Guide</h1> --}}

      <h2 class="step_title"> <b>☎️ Contact Information </b></h2>
      <p>Start with your full name, phone number, professional email address, and a link to your LinkedIn profile if applicable. Ensure your email address is professional and straightforward, creating a positive first impression for potential employers.</p>

      <h2  class="step_title"> <b>Personal Statement (Optional)</b></h2>
      <p>Create a powerful personal statement that succinctly highlights your career goals, key skills, and what sets you apart. Tailor this section to align with the specific job you're applying for, making it a compelling introduction to your CV.</p>

      <h2  class="step_title">📜 <b> CV Layout </b></h2>
      <p>Choose a clean, professional layout that enhances readability. Clearly define sections such as "Education," "Experience," and "Skills." Consistent formatting makes your CV easy to navigate and ensures a polished presentation.</p>

      <h2  class="step_title">🎓 <b>Education</b></h2>
      <p>List your educational background in reverse chronological order. Include details such as the name of the institution, degree earned, graduation date, and any relevant honors or achievements. Showcase your academic prowess and dedication to continuous learning.</p>

      <h2  class="step_title">💼 <b>Work Experience</b></h2>
      <p>Provide a detailed account of your work history, focusing on relevant experience. Include the job title, company name, location, and dates of employment. Use bullet points to highlight your responsibilities and achievements, emphasizing quantifiable results. This section demonstrates your practical skills and accomplishments.</p>

      <!-- Additional Sections -->

      <h2  class="step_title"> <b>Skills</b></h2>
      <p>Create a dedicated section for your skills, showcasing both hard and soft skills relevant to the job. Highlight any certifications or specialized training you possess, providing a comprehensive view of your capabilities.</p>

      <h2  class="step_title">🏆 <b>Achievements</b></h2>
      <p>Highlight key accomplishments, such as projects completed or goals achieved. Quantify your achievements with numbers when possible, showcasing the tangible impact you've had in previous roles.</p>

      <h2  class="step_title"> <b>Professional Memberships (Optional)</b></h2>
      <p>If applicable, include any professional associations or memberships relevant to your industry. This demonstrates your commitment to staying informed and connected within your field.</p>

      <h2 class="step_title">🌎 <b>Languages </b></h2>
      <p>List any languages you speak and your proficiency level. Multilingualism can be a valuable asset, especially in diverse workplaces or global roles.</p>

      <h2 class="step_title"> <b>References</b></h2>
      <p>Optionally state that references are available upon request. Include the names and contact details of professional references if required by the job application, showcasing your network of professional relationships.</p>

      <h2 class="step_title"> <b>Formatting Tips</b></h2>
      <p>Ensure a consistent font throughout your CV. Keep it concise, limiting the document to 1-2 pages. Use bullet points for easy readability and tailor your CV for each job application, emphasizing the most relevant skills and experiences.</p>

      <h2 class="step_title"><b>Proofread</b></h2>
      <p>Thoroughly proofread your CV to eliminate grammatical errors and typos. Consider asking a friend or mentor to review it as well. A polished CV reflects your attention to detail and professionalism.</p>

      <h2 class="step_title"><b>Design Elements (Optional)</b></h2>
      <p>While keeping it professional, consider adding subtle design elements to make your CV visually appealing. Use color sparingly to ensure readability and create a visually engaging document.</p>

      <h2 class="step_title">🎯 <b>Online Presence</b></h2>
      <p>Ensure that your LinkedIn profile aligns with your CV. Clean up any unprofessional content on your social media profiles to present a consistent and positive online presence.</p>

      <h2 class="step_title"> <b>Customization for Each Application</b></h2>
      <p>Tailor your CV for each job application by emphasizing the most relevant skills and experiences. A customized CV increases your chances of catching the recruiter's attention.</p>


        <!-- Add other sections with content here -->

    </div>
</div>

</body>


</html>
<div class="custom-mb-15"> 
    @include('partials._footer')
</div>
<style>

.step_title{
 font-size: 2rem;
 font-family: "Nunito","Helvetica Neue","Helvetica","sans-serif";
 font-weight: 800;
}

    .title{
        color: aliceblue;
    }
    body {
        font-family: Arial, Helvetica, sans-serif;
        margin: 0;
    }

    #cv-container {
        font-family: 'PT Serif', Georgia, serif;
        font-size: 20px;
        line-height: 30px;
        text-align: left;
        margin: 0 auto;
        max-width: 700px;
    }

    .about-section {
        padding: 80px 50px;
        text-align: center;
        background-color: #335f63;
        color: white;
        font-size: 2.2rem;
    }

    .chapter {
        margin: 25px;
    }

    h1, h2 {
        color: #333;
    }

    p {
        margin-bottom: 15px;
    }

    ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    li {
        margin-bottom: 5px;
    }


    
    @media screen and (max-width: 650px) {
    .column {
        width: 100%;
        display: block;
    }


    .about-section{
      font-size: 1.3rem;
    }
    }
</style>
