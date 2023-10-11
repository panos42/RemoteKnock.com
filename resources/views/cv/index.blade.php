
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>RemoteKnock - Resume Builder</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
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


</head>
<body style="background-color:#ffffff;">
    <h1>Create Your CV</h1>
{{-- 
    <div class="custom-mb-15"> 
      @include('cv.cv_sidemenu')
  </div> --}}

<div class="cv_form_card">
    <div class="custom-mb-15"> 
        @include('partials._navbar')
    </div>
    {{-- <form method="POST" action="/cv-builder">
        @csrf --}}

        
        {{-- <div class="mb-6">
          <label for="first_name" class="inline-block text-lg mb-2" style="font-size: 1.5rem">
            First Name
        </label>
            <input type="text" class="cv_input_fields" name="first_name" placeholder="First Name"
              value="{{ $cvProfile ? $cvProfile->first_name : old('first_name') }}" />
            @error('first_name')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div> --}}
 

        {{-- <div class="mb-6">
            <label for="last_name" class="inline-block text-lg mb-2" style="font-size: 1.5rem">
                Last Name
            </label>
            <input type="text" class="cv_input_fields" name="last_name" placeholder="Last Name"
              value="{{ $cvProfile ? $cvProfile->last_name : old('last_name') }}" />
    
            @error('last_name')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
          </div> --}}

{{-- 
        <div class="mb-6">
            <label for="email" class="inline-block text-lg mb-2" style="font-size: 1.5rem">
                Email
            </label>
            <input type="text" class="cv_input_fields" name="email" placeholder="Email Address"
              value="{{ $cvProfile ? $cvProfile->email : old('email') }}" />
    
            @error('email')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
          </div> --}}

        {{-- <div class="mb-6">
            <label for="phone" class="inline-block text-lg mb-2" style="font-size: 1.5rem">
                Phone
            </label>
            <input type="text" class="cv_input_fields" name="phone" placeholder="Phone Number"
              value="{{ $cvProfile ? $cvProfile->phone : old('phone') }}" />
    
            @error('phone')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
          </div> --}}


        {{-- <div class="mb-6">
            <label for="Job_Experience" class="inline-block text-lg mb-2" style="font-size: 1.5rem">
                Job Experience
            </label>
            <input type="text" class="cv_input_fields" name="Job_Experience" placeholder="Job Experience"
              value="{{ $cvProfile ? $cvProfile->Job_Experience : old('Job_Experience') }}" />
    
            @error('Job_Experience')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
          </div> --}}


        {{-- <div class="mb-6">
            <label for="Education" class="inline-block text-lg mb-2" style="font-size: 1.5rem">
                Education
            </label>
            <input type="text" class="cv_input_fields" name="Education" placeholder="Education"
              value="{{ $cvProfile ? $cvProfile->Education : old('Education') }}" />
    
            @error('Education')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
          </div> --}}


        {{-- <div class="mb-6">
            <label for="Skills" class="inline-block text-lg mb-2" style="font-size: 1.5rem">
                Skills
            </label>
            <input type="text" class="cv_input_fields" name="Skills" placeholder="Skills"
              value="{{ $cvProfile ? $cvProfile->Skills : old('Skills') }}" />
    
            @error('Skills')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
          </div> --}}


        {{-- <div class="mb-6">
            <label for="Languages" class="inline-block text-lg mb-2" style="font-size: 1.5rem">
                Languages
            </label>
            <input type="text" class="cv_input_fields" name="Languages" placeholder="Languages"
              value="{{ $cvProfile ? $cvProfile->Languages : old('Languages') }}" />
    
            @error('Languages')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
          </div> --}}

        {{-- <div class="mb-6">
            <label for="Objective" class="inline-block text-lg mb-2" style="font-size: 1.5rem">
                Objective
            </label>
            <input type="text" class="cv_input_fields" name="Objective" placeholder="Objective"
              value="{{ $cvProfile ? $cvProfile->Objective : old('Objective') }}" />
    
            @error('Objective')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
          </div> --}}

        
        {{-- <div class="form-group">
            <label for="template">Select Template</label>
            <select name="template" id="template" required>
                <option value="resume_1.html">Template 1</option>
                <option value="template2">Template 2</option>
            </select>
        </div> --}}

        {{-- <div class="generate_card">
        <button>
          <span class="text">
            <svg height="24" width="24" fill="#FFFFFF" viewBox="0 0 24 24" data-name="Layer 1" id="Layer_1" class="sparkle">
              <path d="M10,21.236,6.755,14.745.264,11.5,6.755,8.255,10,1.764l3.245,6.491L19.736,11.5l-6.491,3.245ZM18,21l1.5,3L21,21l3-1.5L21,18l-1.5-3L18,18l-3,1.5ZM19.333,4.667,20.5,7l1.167-2.333L24,3.5,21.667,2.333,20.5,0,19.333,2.333,17,3.5Z"></path>
            </svg>
            Generate</span>
        </button>
      </div> --}}

      {{-- <div class="generate_card">
        <button>
          <span class="text">
            <svg height="24" width="24" fill="#FFFFFF" viewBox="0 0 24 24" data-name="Layer 1" id="Layer_1" class="sparkle">
            </svg>
            Save</span>
        </button>
      </div>

      <div class="generate_card">
        <button id="generate-preview">
          <span class="text">
            <svg height="24" width="24" fill="#FFFFFF" viewBox="0 0 24 24" data-name="Layer 1" id="Layer_1" class="sparkle">
              <!-- Add your icon here -->
            </svg>
            Generate Preview
          </span>
        </button>
      </div> --}}



      
      
      


    {{-- </form> --}}

  </div>




  <div class="template_card"> 

    <div class="info">
      <div class="info__icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" height="24" fill="none"><path fill="#393a37" d="m12 1.5c-5.79844 0-10.5 4.70156-10.5 10.5 0 5.7984 4.70156 10.5 10.5 10.5 5.7984 0 10.5-4.7016 10.5-10.5 0-5.79844-4.7016-10.5-10.5-10.5zm.75 15.5625c0 .1031-.0844.1875-.1875.1875h-1.125c-.1031 0-.1875-.0844-.1875-.1875v-6.375c0-.1031.0844-.1875.1875-.1875h1.125c.1031 0 .1875.0844.1875.1875zm-.75-8.0625c-.2944-.00601-.5747-.12718-.7808-.3375-.206-.21032-.3215-.49305-.3215-.7875s.1155-.57718.3215-.7875c.2061-.21032.4864-.33149.7808-.3375.2944.00601.5747.12718.7808.3375.206.21032.3215.49305.3215.7875s-.1155.57718-.3215.7875c-.2061.21032-.4864.33149-.7808.3375z"></path></svg>
      </div>
      <div class="info__title">You can edit the template by just clicking on any text field below</div>
      {{-- <div class="info__close"><svg height="20" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg"><path d="m15.8333 5.34166-1.175-1.175-4.6583 4.65834-4.65833-4.65834-1.175 1.175 4.65833 4.65834-4.65833 4.6583 1.175 1.175 4.65833-4.6583 4.6583 4.6583 1.175-1.175-4.6583-4.6583z" fill="#393a37"></path></svg></div> --}}
  </div>

    {{-- @include('cv_templates.resume_1') --}}





    <div class="template_card_real"> 

    <!DOCTYPE html>
    <html>
    <head>
    
      <title>Resume Builder | Web Designer, Director | name@yourdomain.com</title>
      <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    
      <meta name="keywords" content="" />
      <meta name="description" content="" />
    
      <style>
    
    
        .msg { padding: 10px; background: #222; position: relative; }
        .msg h1 { color: #fff;  }
        .msg a { margin-left: 20px; background: #408814; color: white; padding: 4px 8px; text-decoration: none; }
        .msg a:hover { background: #266400; }
        
        /* //-- yui-grids style overrides -- */
        body { font-family: Georgia; color: #444; }
        #inner { padding: 10px 80px; margin: 80px auto; background: #ffffff; border: solid #666; border-width: 8px 0 2px 0; }
        .yui-gf { margin-bottom: 2em; padding-bottom: 2em; border-bottom: 1px solid #ccc; }
        
        /* //-- header, body, footer -- */
        #hd { margin: 2.5em 0 3em 0; padding-bottom: 1.5em; border-bottom: 1px solid #ffffff }
        #hd h2 { text-transform: uppercase; letter-spacing: 2px; }
        #bd, #ft { margin-bottom: 2em; }
        
        /* //-- footer -- */
        #ft { padding: 1em 0 5em 0; font-size: 92%; border-top: 1px solid #ccc; text-align: center; }
        #ft p { margin-bottom: 0; text-align: center;   }
        
        /* //-- core typography and style -- */
        #hd h1 { font-size: 48px; text-transform: uppercase; letter-spacing: 3px; }
        h2 { font-size: 152% }
        h3, h4 { font-size: 122%; }
        h1, h2, h3, h4 { color: #333; }
        p { font-size: 100%; line-height: 18px; padding-right: 3em; }
        a { color: #990003 }
        a:hover { text-decoration: none; }
        strong { font-weight: bold; }
        included_li { line-height: 24px; border-bottom: 1px solid #ccc; }
        p.enlarge { font-size: 144%; padding-right: 6.5em; line-height: 24px; }
        p.enlarge span { color: #000 }
        .contact-info { margin-top: 7px; }
        .first h2 { font-style: italic; }
        .last { border-bottom: 0 }
        
        
        /* //-- section styles -- */
        
        a#pdf { display: block; float: left; background: #666; color: white; padding: 6px 50px 6px 12px; margin-bottom: 6px; text-decoration: none;  }
        a#pdf:hover { background: #222; }
        
        .job { position: relative; margin-bottom: 1em; padding-bottom: 1em; border-bottom: 1px solid #ccc; }
        .job h4 { position: absolute; top: 0.35em; right: 0 }
        .job p { margin: 0.75em 0 3em 0; }
        
        .last { border: none; }
        .skills-list {  }
        .skills-list ul { margin: 0; }
        .skills-list included_li { margin: 3px 0; padding: 3px 0; }
        .skills-list included_li span { font-size: 152%; display: block; margin-bottom: -2px; padding: 0 }
        .talent { width: 32%; float: left }
        .talent h2 { margin-bottom: 6px; }
        
        #srt-ttab { margin-bottom: 100px; text-align: center;  }
        #srt-ttab img.last { margin-top: 20px }
        
        /* --// override to force 1/8th width grids -- */
        .yui-gf .yui-u{width:80.2%;}
        .yui-gf div.first{width:12.3%;}
        
        
        
        
        </style>
    
    
      <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.7.0/build/reset-fonts-grids/reset-fonts-grids.css" media="all" /> 
    
    </head>
    <body>
    
    <div id="doc2" class="yui-t7">
      <div id="inner">
        <form method="POST" action="/cv-builder">
          @csrf

          <div id="hd">
          <div class="yui-gc">
            <div class="yui-u first">
              {{-- <h1 contenteditable="true">{first_name} {last_name}</h1> --}}
              
              <div class="mb-6">              
                  <input type="text" class="cv_input_fields" name="first_name" placeholder="First Name"
                    value="{{ $cvProfile ? $cvProfile->first_name : old('first_name') }}" />
                  @error('first_name')
                  <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                  @enderror
              </div> 

              <div class="mb-6">
                <input type="text" class="cv_input_fields" name="last_name" placeholder="Last Name"
                  value="{{ $cvProfile ? $cvProfile->last_name : old('last_name') }}" />
        
                @error('last_name')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
              </div>

              <h2 contenteditable="true">Web Designer, Director</h2>
            </div>
    
            <div class="yui-u">
              <div class="contact-info">
                

                <div class="mb-6">
                  <input type="text" class="cv_input_fields" name="email" placeholder="Email Address"
                    value="{{ $cvProfile ? $cvProfile->email : old('email') }}" />
          
                  @error('email')
                  <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                  @enderror
                </div>

                {{-- <h3><a href="mailto:name@yourdomain.com">name@yourdomain.com</a></h3> --}}
                {{-- <h3>(313) - 867-5309</h3> --}}

                <div class="mb-6">
                  
                  <input type="text" class="cv_input_fields" name="phone" placeholder="Phone Number"
                    value="{{ $cvProfile ? $cvProfile->phone : old('phone') }}" />
          
                  @error('phone')
                  <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                  @enderror
                </div>

              </div><!--// .contact-info -->
            </div>
          </div><!--// .yui-gc -->
          </div><!--// hd -->
    
         <div id="bd">
          <div id="yui-main">
            <div class="yui-b">
    
              <div class="yui-gf">
                <div class="yui-u first" contenteditable="true">
                  <h2>Profile</h2>
                </div>
                <div class="yui-u" contenteditable="true">
                  <p class="enlarge" contenteditable="true">
                    Progressively evolve cross-platform ideas before impactful infomediaries. Energistically visualize tactical initiatives before cross-media catalysts for change. 
                  </p>
                </div>
              </div><!--// .yui-gf -->
    
              <div class="yui-gf">
                <div class="yui-u first">
                  <h2>Skills</h2>
                </div>
                <div class="yui-u" contenteditable="false">
    
                  <div class="mb-6">
                    
                    <input type="text" class="cv_input_fields" name="Skills" placeholder="Skills"
                      value="{{ $cvProfile ? $cvProfile->Skills : old('Skills') }}" />
            
                    @error('Skills')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                  </div>



                  <div class="mb-6">
                   
                    <input type="text" class="cv_input_fields" name="Objective" placeholder="Objective"
                      value="{{ $cvProfile ? $cvProfile->Objective : old('Objective') }}" />
            
                    @error('Objective')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                  </div>


                  <div class="mb-6">
                    
                    <input type="text" class="cv_input_fields" name="Languages" placeholder="Languages"
                      value="{{ $cvProfile ? $cvProfile->Languages : old('Languages') }}" />
            
                    @error('Languages')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                  </div>
                    <div class="talent" >
                      <h2>Web Design</h2>
                      <p>Assertively exploit wireless initiatives rather than synergistic core competencies.	</p>
                    </div>
    
                    <div class="talent">
                      <h2>Interface Design</h2>
                      <p>Credibly streamline mission-critical value with multifunctional functionalities.	 </p>
                    </div>
    
                    <div class="talent">
                      <h2>Project Direction</h2>
                      <p>Proven ability to lead and manage a wide variety of design and development projects in team and independent situations.</p>
                    </div>
                </div>
              </div><!--// .yui-gf -->
    
              <div class="yui-gf">
                <div class="yui-u first">
                  <h2>Technical</h2>
                </div>
                <div class="yui-u">
                  <ul class="talent" contenteditable="true">
                    <li class="included_li">XHTML</li>
                    <li class="included_li">CSS</li>
                    <li class="last">Javascript</li>
                  </ul>
    
                  <ul class="talent" contenteditable="true">
                    <li class="included_li">Jquery</li>
                    <li class="included_li">PHP</li>
                    <li class="last">CVS / Subversion</li>
                  </ul>
    
                  <ul class="talent" contenteditable="true">
                    <li>OS X</li>
                    <li>Windows XP/Vista</li>
                    <li class="last">Linux</li>
                  </ul>
                </div>
              </div><!--// .yui-gf-->
    
              <div class="yui-gf">
      
                <div class="yui-u first" contenteditable="true">
                  <h2>Experience</h2>
                </div><!--// .yui-u -->
    
                <div class="yui-u">



                  <div class="mb-6">
                    
                    <input type="text" class="cv_input_fields" name="Job_Experience" placeholder="Job Experience"
                      value="{{ $cvProfile ? $cvProfile->Job_Experience : old('Job_Experience') }}" />
            
                    @error('Job_Experience')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                  </div>

    
                  <div class="job" contenteditable="true">
                    <h2>Facebook</h2>
                    <h3>Senior Interface Designer</h3>
                    <h4>2005-2007</h4>
                    <p>Intrinsicly enable optimal core competencies through corporate relationships. Phosfluorescently implement worldwide vortals and client-focused imperatives. Conveniently initiate virtual paradigms and top-line convergence. </p>
                  </div>
    
                  <div class="job" contenteditable="true">
                    <h2>Apple Inc.</h2>
                    <h3>Senior Interface Designer</h3>
                    <h4>2005-2007</h4>
                    <p>Progressively reconceptualize multifunctional "outside the box" thinking through inexpensive methods of empowerment. Compellingly morph extensive niche markets with mission-critical ideas. Phosfluorescently deliver bricks-and-clicks strategic theme areas rather than scalable benefits. </p>
                  </div>
    
                  <div class="job" contenteditable="true">
                    <h2>Microsoft</h2>
                    <h3>Principal and Creative Lead</h3>
                    <h4>2004-2005</h4>
                    <p>Intrinsicly transform flexible manufactured products without excellent intellectual capital. Energistically evisculate orthogonal architectures through covalent action items. Assertively incentivize sticky platforms without synergistic materials. </p>
                  </div>
    
    
                  <div class="job last" contenteditable="true">
                    <h2>International Business Machines (IBM)</h2>
                    <h3>Lead Web Designer</h3>
                    <h4>2001-2004</h4>
                    <p>Globally re-engineer cross-media schemas through viral methods of empowerment. Proactively grow long-term high-impact human capital and highly efficient innovation. Intrinsicly iterate excellent e-tailers with timely e-markets.</p>
                  </div>
    
                </div><!--// .yui-u -->
              </div><!--// .yui-gf -->
    
    
              <div class="yui-gf last" >
                <div class="yui-u first" contenteditable="true">
                  <h2>Education</h2>
                </div>
                <div class="yui-u">

                  <div class="mb-6">
                    
                    <input type="text" class="cv_input_fields" name="Education" placeholder="Education"
                      value="{{ $cvProfile ? $cvProfile->Education : old('Education') }}" />
            
                    @error('Education')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                  </div>


                  <h2>Indiana University - Bloomington, Indiana</h2>
                  <h3>Dual Major, Economics and English &mdash; <strong>4.0 GPA</strong> </h3>
                </div>
              </div><!--// .yui-gf -->
    
    
            </div><!--// .yui-b -->
          </div><!--// yui-main -->
          </div><!--// bd -->
    
          <div id="ft" contenteditable="true">
            <p>Jonathan Doe &mdash; <a href="mailto:name@yourdomain.com">name@yourdomain.com</a> &mdash; (313) - 867-5309</p>
          </div><!--// footer -->
    



          <div class="generate_card">
            <button>
              <span class="text">
                <svg height="24" width="24" fill="#FFFFFF" viewBox="0 0 24 24" data-name="Layer 1" id="Layer_1" class="sparkle">
                  <path d="M10,21.236,6.755,14.745.264,11.5,6.755,8.255,10,1.764l3.245,6.491L19.736,11.5l-6.491,3.245ZM18,21l1.5,3L21,21l3-1.5L21,18l-1.5-3L18,18l-3,1.5ZM19.333,4.667,20.5,7l1.167-2.333L24,3.5,21.667,2.333,20.5,0,19.333,2.333,17,3.5Z"></path>
                </svg>
                Generate</span>
            </button>
          </div>


        </form>

      </div><!-- // inner -->
    
    
    </div><!--// doc -->
    
    
    </body>
    </html>
    </div>
    
    
    
    
    


</div>

{{-- <button id="save-pdf-button">Save as PDF</button> --}}



<button id="save-html-button">Save as HTML</button>





      <div class="generate_card">
        <button>
          <span class="text">
            <svg height="24" width="24" fill="#FFFFFF" viewBox="0 0 24 24" data-name="Layer 1" id="Layer_1" class="sparkle">
            </svg>
            Save</span>
        </button>
      </div>

      <div class="generate_card">
        <button id="generate-preview">
          <span class="text">
            <svg height="24" width="24" fill="#FFFFFF" viewBox="0 0 24 24" data-name="Layer 1" id="Layer_1" class="sparkle">
              <!-- Add your icon here -->
            </svg>
            Generate Preview
          </span>
        </button>
      </div>


<script>
  document.addEventListener('DOMContentLoaded', function () {
    const saveHtmlButton = document.getElementById('save-html-button');

    saveHtmlButton.addEventListener('click', () => {
      const htmlContent = document.querySelector('.template_card_real').outerHTML;
      const blob = new Blob([htmlContent], { type: 'text/html' });
      const url = URL.createObjectURL(blob);

      const a = document.createElement('a');
      a.style.display = 'none';
      a.href = url;
      a.download = 'template.html';

      document.body.appendChild(a);
      a.click();

      // Clean up
      window.URL.revokeObjectURL(url);
    });
  });
</script>



<style>

.template_card{

  border: 1px solid #cacaca;
  width: min-content;
  height: min-content;
  border-radius: 2rem;
  margin-left: 2rem;

  justify-content: center;
  align-items: center;
  text-align: center;
  display: flex;
  flex-direction: column; 
}


.info {
  font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
  width: 850px;
  padding: 12px;
  margin-top: 2rem;
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: center;
  background: #509AF8;
  border-radius: 8px;
  box-shadow: 0px 0px 5px -3px #111;
}

.info__icon {
  width: 20px;
  height: 20px;
  transform: translateY(-2px);
  margin-right: 8px;
}

.info__icon path {
  fill: #fff;
}

.info__title {
  font-weight: 500;
  /* font-size: 14px; */
  font-size:2rem; 

  color: #fff;
}

.info__close {
  width: 20px;
  height: 20px;
  cursor: pointer;
  margin-left: auto;
}

.info__close path {
  fill: #fff;
}




/*  */
button {
 align-items: center;
 background-image: linear-gradient(144deg,#AF40FF, #5B42F3 50%,#00DDEB);
 border: 0;
 border-radius: 8px;
 box-shadow: rgba(151, 65, 252, 0.2) 0 15px 30px -5px;
 box-sizing: border-box;
 color: #FFFFFF;
 display: flex;
 font-family: Phantomsans, sans-serif;
 font-size: 18px;
 justify-content: center;
 line-height: 1em;
 max-width: 100%;
 min-width: 140px;
 padding: 3px;
 text-decoration: none;
 user-select: none;
 -webkit-user-select: none;
 touch-action: manipulation;
 white-space: nowrap;
 cursor: pointer;
 transition: all .3s;
}

button:active,
button:hover {
 outline: 0;
}

button span {
 background-color: rgb(5, 6, 45);
 padding: 16px 24px;
 border-radius: 6px;
 width: 100%;
 height: 100%;
 transition: 300ms;
}

button:hover span {
 background: none;
}

button:active {
 transform: scale(0.9);
}
/*  */

  .cv_form_card{
    margin-right: 1rem;
    margin-left: 1rem;
    margin-top: 5rem;
    border: 1px solid #cacaca;
    border-radius: 2rem;
    justify-content: center;
    align-content: center;
    text-align: center;


  }
.generate_card{
  margin-top: 3rem;
  margin-bottom:3rem; 
  width: 100%;
  display: flex;
  flex-direction: column; /* To stack children vertically */
  align-items: center; /* To center horizontally */
  justify-content: center; /* To center vertically */
  text-align: center; /* If you want to center text within the div */
}
  

    .card {
      width: 200px;
      height: 50px;
      border-radius: 20px;
      padding: 5px;
      box-shadow: rgba(151, 65, 252, 0.2) 0 15px 30px -5px;
      background-image: linear-gradient(144deg,#40ffb3, #5B42F3 50%,#00DDEB);
    }

    .my-button {
      color: white;
      font-size: 2rem;
      background: rgb(5, 6, 45);
      border-radius: 17px;
      width: 100%;
      height: 100%;
      border: transparent;
      cursor: pointer; /* Add this line to set the cursor to a hand pointer on hover */
    }


      .cv_input_fields{
    font-size: 1.5rem;
    color: #000000;

    border: 1px solid #cacaca;
    background: #ffffff;
    border-radius: 0.25rem;
    padding: 0.5rem;
    width: auto; 
    margin-top: 1rem;
    margin-bottom: 1rem;
  }
</style>
    
</body>
</html>

