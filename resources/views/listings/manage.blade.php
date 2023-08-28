{{--  --}}
@auth
@if (!auth()->user()->hasVerifiedEmail() && (auth()->user()->google_id==""))
  <div class="bg-yellow-200 p-4 rounded mb-4">
    <p>
      Please verify your email before managing job listings. Check your email for a verification link, or
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

<x-layout >
  <x-card class="p-10">

    <header>
      <h1 class="text-3xl text-center font-bold my-6 uppercase" style="color: #ccc">
        Manage Job Listings
      </h1>
    </header>

  


    <table class="w-full table-auto rounded-sm" >
      <tbody  style="color: blue">
        {{-- Loop through listings --}}
        @unless($listings->isEmpty())
        @foreach($listings as $listing)
        <tr class="border-gray-300" >
          <td  class="custom-td">
            <a href="/listings/{{$listing->id}}"class="listing_class"> {{$listing->title}} </a>
          </td>
          <td class="custom-td">
            <a href="/listings/{{$listing->id}}/edit" class="custom-link"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
          </td>
          <td class="custom-td">
            <form method="POST" action="/listings/{{$listing->id}}">
              @csrf
              @method('DELETE')
              <button class="custom-button"><i class="fa-solid fa-trash"></i> Delete</button>
            </form>
          </td>
        </tr>
        @endforeach
        @else
        {{-- No listings found --}}
        <tr class="border-gray-300">
          <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
            <p class="text-center">No Listings Found</p>
          </td>
        </tr>
        @endunless
      </tbody>
    </table>
  </x-card>

  <style>
  /* Define your custom classes */

    .listing_class{
      color: #ccc;
    }
    .custom-td {
      color: #0073e6;
      padding: 8px 4px;
      border-top: 1px solid #ccc;
      border-bottom: 1px solid #ccc;
      font-size: 16px; /* Text size equivalent to text-lg */
    }
    
    .custom-link {
      color: #0073e6; /* Blue color for links */
      padding: 2px 6px;
      border-radius: 8px;
      text-decoration: none;
    }
    
    .custom-button {
      color: #ff0000; /* Red color for buttons */
      border: none;
      background: none;
      cursor: pointer;
    }
    </style>
</x-layout>