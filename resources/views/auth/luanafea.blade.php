<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf
        @vite('resources/css/app.css')
        <!-- Email Address -->
         <center>
            <head>
            <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="tailwind.css">

            </head>
            <body class="h-screen w-screen flex items-center justify-center bg-gray-100">
    <div class="w-80">
        <h2 class="text-lg font-bold text-center mb-80">Login</h2>

        <div class="bg-pink-300 shadow-md rounded-md p-6 space-y-4">
            
            <div>
            <x-input-label for="email"
             :value="__('Email')" />
            <x-text-input id="email"  type="email" name="email"
            :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
            

            
        </div>
        
        <!-- Password -->
        <div class="text-black-600">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" 

                            type="password"
                            name="password"
                            required autocomplete="current-password" />
                    
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-red-900 border-red-300 dark:border-red-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-red-800" name="remember">
                <span class="text-black-500   border-1">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-black-600 dark:text-black-400 hover:text-red-900 dark:hover:text-pink-500 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-red-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="block text-sm text-gray-800 ms-4">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
        </div>
            </body>
            </center>
            <footer>
            <div class="w-80">
            <div class="text-lg font-bold text-center mb-80">            
            </div>
            
        
            </footer>
       
    </form>
</x-guest-layout>
