<x-layout>
  <x-card class="p-10">
    <header>
      <h1 class="text-3xl manage-listings-title font-bold my-6 uppercase" style="color: #ccc">
        Manage Job Listings
      </h1>
    </header>


    <button class="back_button">
      <svg height="16" width="16" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1024 1024"><path d="M874.690416 495.52477c0 11.2973-9.168824 20.466124-20.466124 20.466124l-604.773963 0 188.083679 188.083679c7.992021 7.992021 7.992021 20.947078 0 28.939099-4.001127 3.990894-9.240455 5.996574-14.46955 5.996574-5.239328 0-10.478655-1.995447-14.479783-5.996574l-223.00912-223.00912c-3.837398-3.837398-5.996574-9.046027-5.996574-14.46955 0-5.433756 2.159176-10.632151 5.996574-14.46955l223.019353-223.029586c7.992021-7.992021 20.957311-7.992021 28.949332 0 7.992021 8.002254 7.992021 20.957311 0 28.949332l-188.073446 188.073446 604.753497 0C865.521592 475.058646 874.690416 484.217237 874.690416 495.52477z"></path></svg>
      <a href="/" class="back_text"> Go Back
      </a>
      {{-- <span>Back</span> --}}
    </button>

    <div class="grid grid-cols-1 gap-4">
      {{-- Loop through listings --}}
      @unless($listings->isEmpty())
      @foreach($listings as $listing)
      <div class="edit-card shadow-md">
        <div class="job-info">
          <a href="/listings/{{$listing->id}}" class="listing_class">{{$listing->title}} - {{$listing->company}}</a>
        </div>
        <div class="button-container">
          <a href="/listings/{{$listing->id}}/edit" class="custom-link"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
          <form method="POST" action="/listings/{{$listing->id}}">
            @csrf
            @method('DELETE')
            <button class="custom-button"><i class="fa-solid fa-trash"></i> Delete</button>
          </form>
        </div>
      </div>
      @endforeach
      @else
      {{-- No listings found --}}
      <tr class="border-gray-300">
        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
          <p class="text-center">No Listings Found</p>
        </td>
      </tr>
      @endunless
    </div>

    <style>
          .text-center{
        color: rgb(255, 72, 0);
        text-align: center;
        margin-top: 2rem;
        font-size: 1.5rem;
    }
    .manage-listings-title{
      margin-top: 2rem;
      text-align: center;
      font-size: 3rem;
    }
      /* Define your custom classes */
      .edit-card {
        width: 70%;
        border: 1px solid #ccc;
        border-radius: 8px;
        padding: 16px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        margin: 0 auto;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 16px;
      }

      .job-info {
        color: #ccc;
        font-size: 20px;
        width: 70%;
        margin-right: 10px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
      }

      .button-container {
        display: flex;
        align-items: center;
      }

      /* Rest of your custom styles for other elements */
      .custom-td {
        color: #0073e6;
        padding: 8px 4px;
        border-top: 1px solid #ccc;
        border-bottom: 1px solid #ccc;
        font-size: 16px;
      }

      .custom-link {
        font-size:1.5rem;
        color: #0073e6;
        padding: 2px 6px;
        border-radius: 8px;
        text-decoration: none;
        margin-right: 1rem;
      }

      .custom-button {
        font-size:1.5rem;
        color: #ff0000;
        border: none;
        background: none;
        cursor: pointer;
      }


      @media (max-width: 767px) {

        .custom-link {
        font-size:1rem;
        color: #0073e6;
        padding: 2px 6px;
        border-radius: 8px;
        text-decoration: none;
        margin-right: 0.2rem;
      }

      .custom-button {
        font-size:1rem;
        color: #ff0000;
        border: none;
        background: none;
        cursor: pointer;
      }


        .manage-listings-title{
          font-size: 1.5rem;
        }
        .edit-card {
        width: 90%;
        border: 1px solid #ccc;
        border-radius: 8px;
        padding: 16px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        margin: 0 auto;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 16px;
      }
      }






      .back_button {
  display: flex;
  height: 3em;
  width: 100px;
  margin: 0 auto; /* Center horizontally relative to the page */
  align-items: center;
  justify-content: center;
  background-color: #eeeeee4b;
  border-radius: 3px;
  letter-spacing: 1px;
  transition: all 0.2s linear;
  cursor: pointer;
  border: none;
  background: #fff;
  margin-bottom: 2rem;
  margin-top: 2rem;
}



.back_button > svg {
 /* margin-right: 5px;
 margin-left: 5px; */
 font-size: 20px;
 transition: all 0.4s ease-in;
}

.back_button:hover > svg {
 font-size: 1.2em;
 transform: translateX(0);
}

.back_button:hover {
 /* box-shadow: 9px 9px 33px #d1d1d1, -9px -9px 33px #ffffff; */
 transform: translateY(-2px);
}



.back_text {
    font-size: 1.2rem;
    font-weight: 400;
    color: #000000;
    }
    </style>
  </x-card>
</x-layout>
