<x-layout> 
    <x-card class="p-10 rounded max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Login
            </h2>
            <p class="mb-4">Log into your account</p>
        </header>

        <form method="POST" action="/users/authenticate">
            @csrf

            <div class="mb-6">
                {{-- <label for="email" class="inline-block text-lg mb-2">Email</label> --}}
                <input
                placeholder="Email"
                    type="email"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="email"
                    value="{{old('email')}}"
                />
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                {{-- <label for="password" class="inline-block text-lg mb-2">Password</label> --}}
                <input
                placeholder="Password"
                    type="password"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="password"
                    value="{{old('password')}}"
                />
                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

           

            
            <div class="mb-6">
                <button type="submit" class="bg-black text-white rounded py-2 w-full">
                    Sign in
                </button>
            </div>
            

            <div class="form-group row">
                <div class="col-md-6 offset-md-4">
                    <div class="checkbox">
                        <label>
                            <a href="{{ route('forget.password.get') }}" class="text-laravel hover:underline">
                                Reset Password
                            </a>
                        </label>
                    </div>
                </div>
            </div>
            

            <div class="mt-8">
                <p>
                    Don't have an account?
                    <a href="/register" class="text-laravel">Register</a>
                </p>
            </div>
        </form>
        <p>
        </p>
        <hr/>
          
        @yield('content')

    </x-card>

    {{-- <x-card class="p-10 rounded max-w-lg mx-auto mt-24" id="reset-card">
    </x-card> --}}
    
    <style>
hr {
  border: 0;
  border-top: 2px solid rgb(17, 41, 59);
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

</x-layout>


