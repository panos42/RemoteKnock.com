<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Include Quill CSS -->
  <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
</head>
{{--  --}}
@auth
@if (!auth()->user()->hasVerifiedEmail())
  <div class="bg-yellow-200 p-4 rounded mb-4">
    <p>
      Please verify your email before creating a job listing. Check your email for a verification link, or
      <form action="{{ route('verification.send') }}" method="POST" class="d-inline">
        @csrf
        <button type="submit" class="d-inline btn btn-link p-0 text-blue-500 focus:outline-none">
          click here to request another
        </button>
      </form>
    </p>
  </div>
@endif
@endauth
{{--  --}}
<x-layout>
  <x-card class="p-10 max-w-lg mx-auto mt-24">
    <header class="text-center">
      <h2 class="text-2xl font-bold uppercase mb-1">Create a Job</h2>
      <p class="mb-4">Post a job to find a developer</p>
    </header>


    <form method="POST" action="/listings" enctype="multipart/form-data">
      @csrf
      <div class="mb-6">
        {{-- <label for="company" class="inline-block text-lg mb-2">Company Name</label> --}}
        <input type="text"
         class="border border-gray-200 rounded p-2 w-full"
         name="company"
         placeholder="Company Name"
          value="{{old('company')}}" />

        @error('company')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="title" class="inline-block text-lg mb-2">Job Title</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title"
          placeholder="Example: Senior Laravel Developer" value="{{old('title')}}" />

        @error('title')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="location" class="inline-block text-lg mb-2">Job Location</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="location"
          placeholder="Example: Remote, Boston MA, etc" value="{{old('location')}}" />

        @error('location')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="email" class="inline-block text-lg mb-2">
          Contact Email
        </label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="email" value="{{old('email')}}" />

        @error('email')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="website" class="inline-block text-lg mb-2">
          Website/Application URL
        </label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="website"
          value="{{old('website')}}" />

        @error('website')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="tags" class="inline-block text-lg mb-2">
          Tags (Comma Separated)
        </label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags"
          placeholder="Example: Laravel, Backend, Postgres, etc" value="{{old('tags')}}" />

        @error('tags')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>
        {{--  --}}
        {{-- <div class="mb-6 flex items-center">
          <div class="mr-4">
            <label for="min_salary" class="inline-block text-lg mb-2">Minimum Salary</label>
            <input type="text" class="border border-gray-200 rounded p-2" name="min_salary"
              placeholder="Example: 50000" value="{{old('min_salary')}}" />
            @error('min_salary')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
          </div>
        
          <div>
            <label for="max_salary" class="inline-block text-lg mb-2">Maximum Salary</label>
            <input type="text" class="border border-gray-200 rounded p-2" name="max_salary"
              placeholder="Example: 80000" value="{{old('max_salary')}}" />
            @error('max_salary')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
          </div>
        </div> --}}
        
        <div class="mb-6 flex items-center">
          <div class="mr-4">
            <label for="min_salary" class="inline-block text-lg mb-2">Minimum Salary</label>
            <select class="border border-gray-200 rounded p-2" name="min_salary">
              <option value="">Select minimum salary</option>
              <option value="10.000">USD 10.000 per year</option>
              <option value="20.000">USD 20.000 per year</option>
              <option value="30.000">USD 30.000 per year</option>
              <option value="40.000">USD 40.000 per year</option>
              <option value="50.000">USD 50.000 per year</option>
              <option value="60.000">USD 60.000 per year</option>
              <option value="70.000">USD 70.000 per year</option>
              <option value="80.000">USD 80.000 per year</option>
              <option value="90.000">USD 90.000 per year</option>
              <option value="100.000">USD 100.000 per year</option>
              <option value="110.000">USD 110.000 per year</option>
              <option value="120.000">USD 120.000 per year</option>
              <option value="130.000">USD 130.000 per year</option>
              <option value="140.000">USD 140.000 per year</option>
              <option value="150.000">USD 150.000 per year</option>


              <!-- Add more options as needed -->
            </select>
            @error('min_salary')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
          </div>
        
          <div>
            <label for="max_salary" class="inline-block text-lg mb-2">Maximum Salary</label>
            <select class="border border-gray-200 rounded p-2" name="max_salary">
              <option value="">Select maximum salary</option>
              <option value="10.000">USD 10.000 per year</option>
              <option value="20.000">USD 20.000 per year</option>
              <option value="30.000">USD 30.000 per year</option>
              <option value="40.000">USD 40.000 per year</option>
              <option value="50.000">USD 50.000 per year</option>
              <option value="60.000">USD 60.000 per year</option>
              <option value="70.000">USD 70.000 per year</option>
              <option value="80.000">USD 80.000 per year</option>
              <option value="90.000">USD 90.000 per year</option>
              <option value="100.000">USD 100.000 per year</option>
              <option value="110.000">USD 110.000 per year</option>
              <option value="120.000">USD 120.000 per year</option>
              <option value="130.000">USD 130.000 per year</option>
              <option value="140.000">USD 140.000 per year</option>
              <option value="150.000">USD 150.000 per year</option>

              <!-- Add more options as needed -->
            </select>
            @error('max_salary')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
          </div>
        </div>
        
        {{--  --}}

        
      <div class="mb-6">
        <label for="logo" class="inline-block text-lg mb-2">Company Logo</label>
        <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo" id="logoInput" />
        <img id="logoPreview" src="#" alt="Uploaded Logo" style="display:none; max-width: 200px;" />
      
        @error('logo')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>
      

      <div class="mb-6">
        <label for="description" class="inline-block text-lg mb-2">
          Job Description
        </label>

        {{-- <textarea class="border border-gray-200 rounded p-2 w-full" name="description"  rows="10" id="editor"
          placeholder="Include tasks, requirements, salary, etc">{{old('description')}}</textarea> --}}
          
              <!-- Hidden input field to store the description content -->
        <input type="hidden" name="description" id="descriptionInput" value="{{ old('description') }}" />

        <!-- The div element for the Quill editor -->
          <div id="editor"> </div> 

        @error('description')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
          Create Post
        </button>

        <a href="/" class="text-black ml-4"> Back </a>
      </div>
    </form>
  </x-card>
</x-layout>
<!-- Add Quill JavaScript -->
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

<script>
  var quill = new Quill('#editor', {
    theme: 'snow'
  });

  // Add an event listener to update the hidden input field when the editor content changes
  quill.on('text-change', function () {
    var html = quill.root.innerHTML;
    document.getElementById('descriptionInput').value = html;
  });
</script>

<script>
    // Image preview function
    const logoInput = document.getElementById('logoInput');
  const logoPreview = document.getElementById('logoPreview');

  logoInput.addEventListener('change', function () {
    const file = this.files[0];
    if (file) {
      const reader = new FileReader();
      reader.addEventListener('load', function () {
        logoPreview.src = reader.result;
        logoPreview.style.display = 'inline'; // Display the image
      });
      reader.readAsDataURL(file);
    }
  });
</script>


<!-- Add the following script before the closing </body> tag -->
{{-- <script>
  const descriptionDiv = document.getElementById('description');
  const descriptionInput = document.getElementById('descriptionInput');

  // Update the hidden input field with the content of the editable div
  descriptionDiv.addEventListener('input', () => {
    descriptionInput.value = descriptionDiv.innerText;
  });
</script> --}}

<!--  FUNCTION FOR LOWER CHAR LIMIT -->
{{-- <script>
  const descriptionInput = document.querySelector('textarea[name="description"]');
  const descriptionCount = document.createElement('span');
  descriptionCount.innerText = 'Characters left: 50';
  descriptionInput.parentNode.appendChild(descriptionCount);

  descriptionInput.addEventListener('input', () => {
    const remainingCharacters = 50 - descriptionInput.value.length;
    descriptionCount.innerText = `Characters left: ${remainingCharacters}`;
    descriptionCount.style.color = remainingCharacters >= 0 ? 'black' : 'red';
  });
</script> --}}


</body>
</html>