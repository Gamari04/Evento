{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
<!DOCTYPE html>
<html >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Evento</title>

    <script src="https://cdn.tailwindcss.com"></script>


</head>
<body class="antialiased">
<div class="flex flex-col items-center justify-center min-h-fit overflow-hidden  mx-auto md:h-screen pt:mt-0 dark:bg-gray-900">


    <!-- Card -->
    <div class="w-full max-w-xl p-6 space-y-8 sm:p-8 bg-white rounded-lg shadow dark:bg-gray-800">
        <h2 class="text-2xl font-bold text-gray-900 dark:text-white text-center">
            Login To Your Account
        </h2>
        <form class="space-y-6" action="{{ route('login') }}" method="post">
            @csrf

            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="name@company.com" value="{{ old('email') }}">
                @error('email')
                <p class="text-sm text-red-600 dark:text-red-500"> {{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
                <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                @error('password')
                <p class="text-sm text-red-600 dark:text-red-500"> {{ $message }}</p>
                @enderror
            </div>

            <div>
                <input type="submit" class="sm:text-sm rounded-lg block w-full p-2.5 dark:bg-gray-900 text-white hover:bg-gray-700">
            </div>
            <div class="text-sm font-medium text-gray-500 dark:text-gray-400">
                You dont  have an account? <a href="{{ route('register') }}" class="text-primary-700 hover:underline dark:text-primary-500">Register here</a>
            </div>
            <div class="text-sm font-medium text-gray-500 dark:text-gray-400">
                Are you forgot your password? <a href="/forgot-password" class="text-primary-700 hover:underline dark:text-primary-500">Click here</a>
            </div>
        </form>

    </div>
</div>
</body>
</html>
