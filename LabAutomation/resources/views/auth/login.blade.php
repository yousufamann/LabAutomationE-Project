<x-guest-layout>
    {{-- <x-authentication-card> --}}
    {{-- <x-slot name="logo"> --}}
    {{-- <x-authentication-card-logo /> --}}
    {{-- </x-slot> --}}

    {{-- <x-validation-errors class="mb-4" /> --}}

    {{-- @session('status') --}}
    {{-- <div class="mb-4 font-medium text-sm text-green-600"> --}}
    {{-- {{ $value }} --}}
    {{-- </div> --}}
    {{-- @endsession --}}

    {{-- <form method="POST" action="{{ route('login') }}"> --}}
    {{-- @csrf --}}

    {{-- <div> --}}
    {{-- <x-label for="email" value="{{ __('Email') }}" /> --}}
    {{-- {{-- <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" /> --}}
    {{-- </div> --}}

    {{-- <div class="mt-4"> --}}
    {{-- <x-label for="password" value="{{ __('Password') }}" /> --}}
    {{-- {{-- <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" /> --}}
    {{-- </div> --}}

    {{-- <div class="block mt-4"> --}}
    {{-- <label for="remember_me" class="flex items-center"> --}}
    {{-- <x-checkbox id="remember_me" name="remember" /> --}}
    {{-- {{-- <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span> --}}
    {{-- </label> --}}
    {{-- </div> --}}

    {{-- <div class="flex items-center justify-end mt-4"> --}}
    {{-- @if (Route::has('password.request')) --}}
    {{-- {{-- {{-- <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}"> --}}
    {{-- {{ __('Forgot your password?') }} --}}
    {{-- </a> --}}
    {{-- @endif --}}

    {{-- <x-button class="ms-4"> --}}
    {{-- {{ __('Log in') }} --}}
    {{-- </x-button> --}}
    {{-- </div> --}}
    {{-- </form> --}}
    {{-- </x-authentication-card> --}}

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{ asset('FormAssets/style.css') }}" />
        <title>Sign in & Sign up Form</title>
    </head>

    <body>
        <div class="container">
            <div class="forms-container">
                <div class="signin-signup">
                    <form method="POST" action="{{ route('login') }}" class="sign-in-form">
                        @csrf
                        <h2 class="title"><b>Login Form</b></h2>
                        <div class="input-field">
                            <i class="fas fa-user"></i>
                            <x-input id="email" type="email" name="email" :value="old('email')" required autofocus
                                autocomplete="username" placeholder="Email" />
                        </div>
                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <x-input id="password" type="password" name="password" required
                                autocomplete="current-password" placeholder="Password" />
                        </div>
                        <input type="submit" value="Login" class="btn solid" />
                        <p class="social-text">Or Sign in with social platforms</p>
                        <div class="social-media">
                            <a href="https://www.facebook.com/profile.php?
                            id=61565288423127&mibextid=ZbWKwL"
                             class="social-icon">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="https://www.instagram.com/invites/contact/?
                            igsh=1lblqa1oyhlej&utm_content=vlf16xe" class="social-icon">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </form>
                    <form method="POST" action="{{ route('register') }}" class="sign-up-form">
                        @csrf
                        <h2 class="title"><b>Registration Form</b></h2>
                        <div class="input-field">
                            <i class="fas fa-user"></i>
                            <x-input id="name" type="text" name="name" :value="old('name')" required autofocus
                                autocomplete="name" placeholder="Name" />
                        </div>
                        <div class="input-field">
                            <i class="fas fa-envelope"></i>
                            <x-input id="email" type="email" name="email" :value="old('email')" required
                                autocomplete="username" placeholder="Email" />
                        </div>
                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <x-input id="password" type="password" name="password" required autocomplete="new-password"
                                placeholder="Password" />
                        </div>
                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <x-input id="password_confirmation" type="password" name="password_confirmation" required
                                autocomplete="new-password" placeholder="Confirm Password" />
                        </div>
                        <input type="submit" class="btn" value="Sign up" />
                        <p class="social-text">Or Sign up with social platforms</p>
                        <div class="social-media">
                            <a href="https://www.facebook.com/profile.php?
                            id=61565288423127&mibextid=ZbWKwL"
                                class="social-icon">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="https://www.instagram.com/invites/contact/?
                            igsh=1lblqa1oyhlej&utm_content=vlf16xe" class="social-icon">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="panels-container">
                <div class="panel left-panel">
                    <div class="content">
                        <h3>New here?</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Debitis, ex ratione. Aliquid!</p>
                        <button class="btn transparent" id="sign-up-btn">Sign up
                        </button>
                    </div>
                    <img src="{{ asset('FormAssets/image/image.jpeg.png') }}" class="image" alt="" />
                </div>
                <div class="panel right-panel">
                    <div class="content">
                        <h3>One of us?</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Nostrum laboriosam ad deleniti.</p>
                        <button class="btn transparent" id="sign-in-btn">Sign in
                        </button>
                    </div>
                    <img src="{{ asset('FormAssets/image/image.jpeg.png') }}" class="image" alt="" />
                </div>
            </div>
        </div>
        <script src="{{ asset('FormAssets/app.js') }}"></script>
    </body>

    </html>
</x-guest-layout>
