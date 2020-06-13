@extends('layouts.auth')

@section('title')
    Login
@endsection

@section('content')
    <x-auth-heading message="Sign into your account" />

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="bg-white py-8 px-8 sm:px-4 sm:shadow sm:rounded-lg sm:px-10">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div>
                    <label for="email" class="block text-sm font-medium leading-5 text-gray-700">
                        {{ __('E-Mail Address') }}
                    </label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-300 @error('email') text-red-300 @enderror" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <input name="email" id="email" type="email" class="form-input block w-full sm:text-sm sm:leading-5 pl-10 @error('email') pr-10 border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red @enderror" value="{{ old('email') }}" autocomplete="email" autofocus>
                        @error('email')
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        @enderror
                    </div>
                    @error('email')
                    <p class="mt-2 text-sm text-red-600">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <div class="mt-6">
                    <label for="password" class="block text-sm font-medium leading-5 text-gray-700">
                        {{ __('Password') }}
                    </label>

                    <div class="mt-1 relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-300 @error('password') text-red-300 @enderror" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                            </svg>
                        </div>
                        <input id="password" type="password" name="password" class="form-input block w-full sm:text-sm sm:leading-5 pl-10 @error('password') pr-10 border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red @enderror" autocomplete="current-password">
                        @error('password')
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        @enderror
                    </div>
                    @error('password')
                    <p class="mt-2 text-sm text-red-600">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <div class="mt-6 flex items-center justify-between">
                    <div class="flex items-center">
                        <input class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />
                        <label class="ml-2 block text-sm leading-5 text-gray-900" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                    <div class="text-sm leading-5">
                        @if (Route::has('password.request'))
                            <a class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </div>

                <div class="mt-6">
                    <span class="block w-full rounded-md shadow-sm">
                        <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                            {{ __('Login') }}
                        </button>
                    </span>
                </div>
            </form>
            <div class="mt-6">
                <div class="relative">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-300"></div>
                    </div>
                    <div class="relative flex justify-center text-sm leading-5">
                        <span class="px-2 bg-white text-gray-500">
                          Or continue with
                        </span>
                    </div>
                </div>

                <div class="mt-6 grid grid-cols-3 gap-3">
                    <div>
                        <span class="w-full inline-flex rounded-md shadow-sm">
                            <a href="/login/azure" class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-md bg-white text-sm leading-5 font-medium text-gray-500 hover:text-gray-400 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition duration-150 ease-in-out">
                                <svg aria-hidden="true" class="fill-current h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M0 32h214.6v214.6H0V32zm233.4 0H448v214.6H233.4V32zM0 265.4h214.6V480H0V265.4zm233.4 0H448V480H233.4V265.4z"></path></svg>
                            </a>
                        </span>
                    </div>
                    <div>
                        <span class="w-full inline-flex rounded-md shadow-sm">
                            <a href="/login/google" class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-md bg-white text-sm leading-5 font-medium text-gray-500 hover:text-gray-400 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition duration-150 ease-in-out">
                                <svg class="h-5 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512"><path fill="currentColor" d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"></path></svg>
                            </a>
                        </span>
                    </div>
                    <div>
                        <span class="w-full inline-flex rounded-md shadow-sm">
                            <a href="/login/github" class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-md bg-white text-sm leading-5 font-medium text-gray-500 hover:text-gray-400 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition duration-150 ease-in-out">
                                <svg class="h-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 0C4.477 0 0 4.484 0 10.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0110 4.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.203 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.942.359.31.678.921.678 1.856 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0020 10.017C20 4.484 15.522 0 10 0z" clip-rule="evenodd"/>
                                </svg>
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
