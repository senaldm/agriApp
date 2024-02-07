
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <meta name="description" content="Simple landind page" />
        <meta name="keywords" content="" />
        <meta name="author" content="" /> <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>

        <!--Replace with your tailwind.css once created-->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
        <!-- Define your gradient here - use online tools to find a gradient matching your branding-->
        <style>
          .gradient {
            background: linear-gradient(90deg, #d53369 0%, #daae51 100%);
          }
        </style>
      </head>

<section>
    <nav class="bg-red-300 border-gray-200 sm:px-4 rounded dark:bg-blue-500">
        <div class="container flex flex-wrap justify-between items-center mx-auto">
          <a href="" class="flex items-center">
              <img src="https://drive.google.com/uc?export=view&id=1snguBme3vmgsWR8HvPbfGcV58oPdgI9h" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo" />
              <span class="self-center text-lg font-semibold whitespace-nowrap dark:text-blue font-serif">  Agriculture Products Management System - Login Console</span>
          </a>
          <button data-collapse-toggle="mobile-menu" type="button" class="inline-flex items-center p-2 ml-3 text-base text-gray-500 rounded-lg md:hidden  focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-blue-500 dark:focus:ring-gray-600" aria-controls="mobile-menu" aria-expanded="false">

                <a class="inline-block text-black no-underline hover:text-white hover:text-underline py-2 px-3 font-bold font-serif " href="/">Home</a>
                <a class="inline-block text-black no-underline hover:text-white hover:text-underline py-2 px-3 font-bold font-serif" href="/register">Sign up</a>
          </button>

      </nav>


<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
