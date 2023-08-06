<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Include Quill CSS -->
  <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
</head>

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
        <div class="mb-6 flex items-center">
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
          Create Gig
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