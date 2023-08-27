
<x-layout> 
    <div class="box-form">


        {{-- <div class="left">
            <div class="overlay">
                <h1>Your Turn</h1>
                <p>to Build a great team to scale your product to new horizons</p>
                <span>
                   
                </span>
            </div>
        </div> --}}

        <div class="left">
          <div class="overlay">
              <h1>Your Turn</h1>
              <p>Build a great team to scale your product to new horizons</p>
              <span></span>
          </div>
      </div>
      


	<div class="right">

    <x-card class="form p-10 rounded max-w-lg mx-auto mt-24">
        <header class="text-center">
        </header>

        <form method="POST" action="/users/authenticate">
            <p class="welcome">
                Welcome,<span class="subtitle">sign in to continue</span>
            </p>
            @csrf

            <div class="mb-6">
                {{-- <label for="email" class="inline-block text-lg mb-2">Email</label> --}}
                <input
                placeholder="Email"
                    type="email"
                    class="input_form"
                    name="email"
                    value="{{old('email')}}"
                />
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <input
                placeholder="Password"
                    type="password"
                    class="input_form"
                    name="password"
                    value="{{old('password')}}"
                />
                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            {{-- <div class="mb-6">
              <input
                  placeholder="Password"
                  type="password"
                  class="input_form"
                  name="password"
                  value="{{old('password')}}"
              />
              
              <button class="toggle-password" type="button">
                  Show
              </button>
              @error('password')
                  <p class="text-red-500 text-xs mt-1">{{$message}}</p>
              @enderror
          </div>
           --}}


            
            <div class="mb-6">
                <button type="submit" class="sign_in_btn">
                    Sign in
                </button>
            </div>


            <a href="{{ route('auth.google') }}" class="oauthButton"> 
                <svg class="icon" viewBox="0 0 24 24">
                <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"></path>
                <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"></path>
                <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"></path>
                <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"></path>
                <path d="M1 1h22v22H1z" fill="none"></path>
                </svg>
                    Continue with Google
            </a>


            <div class="mt-8">
                <p>
                    Don't have an account?
                    <a href="/register" class="text-laravel" style="color: blue;">Register</a>
                </p>
            </div>


            <div class="form-group row">
                <div class="col-md-6 offset-md-4">
                    <div class="checkbox">
                        <label>
                            {{-- <a href="{{ route('forget.password.get') }}" class="text-laravel hover:underline">
                                Reset Password
                            </a> --}}
                            <div>Forgot Password? Click here to <a href="{{ route('forget.password.get') }}" class=" hover:underline" style="color: blue;">Reset Password</a></div>

                        </label>
                    </div>
                </div>
            </div>




        </form>
        <p>
        </p>
        <hr/>
          
        @yield('content')

    </x-card>

</div>


    <style>
      .mb-6 {
        margin-bottom: 1.5rem; /* This could be any measurement value */
      }


      .sign_in_btn{
        background-color: black;
        box-shadow: 4px 4px var(--main-color);
        color: white;
        border-radius: 0.25rem; 
        padding: 0.5rem 1rem; 
        width: 100%;
        border: none;
        cursor: pointer;
      }

        hr {
        border: 0;
        border-top: 2px solid rgb(17, 41, 59);
        }

    /* Google Sign In Button */

    .form {
        margin: 0 auto;
      --background: #ffffff;
      --input-focus: #2d8cf0;
      --font-color: #323232;
      --font-color-sub: #666;
      --bg-color: #fff;
      --main-color: #323232;
      padding: 20px;
      background: var(--background);
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      justify-content: center;
      gap: 20px;
      border-radius: 5px;
      border: none;
      /* border: 2px solid var(--main-color); */
      flex-direction: column; /* Stack children vertically */
      align-items: center; /* Center horizontally */
      justify-content: center; /* Center vertically */
    }

    .welcome {
      font-family: var(--font-DelaGothicOne);
      color: var(--font-color);
      font-weight: 700;
      font-size: 20px;
      margin-bottom: 15px;
      display: flex;
      flex-direction: column;
    }

    .subtitle {
      font-family: var(--font-SpaceMono);
      color: var(--font-color-sub);
      font-weight: 600;
      font-size: 17px;
    }



    .oauthButton {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 5px;
      padding: auto 15px 15px auto;
      width: 100%;
      height: 40px;
      border-radius: 5px;
      border: 2px solid var(--main-color);
      background-color: var(--bg-color);
      box-shadow: 4px 4px var(--main-color);
      font-size: 16px;
      font-weight: 600;
      color: var(--font-color);
      cursor: pointer;
      transition: all 250ms;
      position: relative;
      overflow: hidden;
      z-index: 1;
    }

    .oauthButton::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
      width: 0;
      background-color: #212121;
      z-index: -1;
      -webkit-box-shadow: 4px 8px 19px -3px rgba(0, 0, 0, 0.27);
      box-shadow: 4px 8px 19px -3px rgba(0, 0, 0, 0.27);
      transition: all 250ms;
    }

    .oauthButton:hover {
      color: #e8e8e8;
    }

    .oauthButton:hover::before {
      width: 100%;
    }

    .input_form {
      width: 100%;
      height: 40px;
      border-radius: 5px;
      border: 2px solid var(--main-color);
      background-color: var(--bg-color);
      box-shadow: 4px 4px var(--main-color);
      font-size: 15px;
      font-weight: 600;
      color: var(--font-color);
      padding: 5px 10px;
      outline: none;
    }

    .icon {
      width: 1.5rem;
      height: 1.5rem;
    }


      body, html {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

    .box-form {
    margin: 0 auto;
    /* width: 95%; 
    height: 100%;  */
    background: #FFFFFF;
    border-radius: 10px;
    overflow: hidden;
    display: flex;
    flex: 1 1 100%;
    align-items: stretch;
    justify-content: space-between;
    border: 2px solid #000;
    box-sizing: border-box;

    }

    .box-form div {
      height: auto;
    }
    .left {
      color: #FFFFFF;
      background-size: cover;
      background-repeat: no-repeat;
      background-image: url("https://i.pinimg.com/736x/5d/73/ea/5d73eaabb25e3805de1f8cdea7df4a42--tumblr-backgrounds-iphone-phone-wallpapers-iphone-wallaper-tumblr.jpg");
      overflow: hidden;
    }
    .left .overlay {
      padding: 30px;
      width: 100%;
      height: 100%;
      background: #5961f9ad;
      overflow: hidden;
      box-sizing: border-box;
    }
    .box-form .left .overlay h1 {
      font-size: 7vmax;
      line-height: 1.2;
      font-weight: 900;
      margin-top: 40px;
      margin-bottom: 20px;
    }

    .box-form .left .overlay p {
      font-size: 1.5rem;
      color: #fff;
    }


    .right {
  padding: 95px;
  overflow: hidden;
}




@media (max-width: 980px) {
  .box-form {
    flex-flow: wrap;
    text-align: center;
    align-content: center;
    align-items: center;
  }

  .box-form .right {
    width: 100%;
  }

}

    /* Hide the left section on mobile devices */
    @media (max-width: 768px) {
        .left {
            display: none;
        }

        .box-form {
        padding: 20px 20px 0; /* Adjust the top padding value */
        }

            /* Center the input_form horizontally */
      .input_form {

        width: 100%;
        box-sizing: border-box;
        padding: 5px 10px;
        margin: 0;
        }

        .right {
            width: 100%;
            padding: 20px; /* Adjust padding as needed */
        }
    }



    </style>




<script>
    const resetPasswordLink = document.getElementById('reset-password-link');
    const resetPasswordSection = document.getElementById('reset-password-section');

    resetPasswordLink.addEventListener('click', function(event) {
        event.preventDefault();
        if (resetPasswordSection.style.display === 'none') {
            resetPasswordSection.style.display = 'block';
        } else {
            resetPasswordSection.style.display = 'none';
        }
    });
</script>


{{-- HIDE / VIEW PASSWORD FIELD --}}
{{-- <script>
  const togglePasswordButton = document.querySelector('.toggle-password');
  const passwordInput = document.querySelector('.input_form[type="password"]');

  togglePasswordButton.addEventListener('click', function () {
      if (passwordInput.type === 'password') {
          passwordInput.type = 'text';
          togglePasswordButton.textContent = 'Hide';
      } else {
          passwordInput.type = 'password';
          togglePasswordButton.textContent = 'Show';
      }
  });
</script> --}}


</x-layout>


