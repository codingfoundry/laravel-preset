@extends('layouts.auth')

@section('title')
    Sign in to your account
@endsection

@section('content')
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-on-white.svg" alt="Logo" />
        <h2 class="mt-6 text-center text-3xl leading-9 font-extrabold text-gray-900">
            Sign in to your account
        </h2>
        <p class="mt-2 text-center text-sm leading-5 text-gray-600 max-w">
            Or
            <a href="{{ route('register') }}" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                start your 14-day free trial
            </a>
        </p>
    </div>

    <form method="POST" action="{{ route('password.update') }}" class="bg-white shadow-xl rounded-lg p-6 mt-12 border-t-8 border-gray-600">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
        <div class="w-full">
            <label for="email" class="">{{ __('E-Mail Address') }}</label>

            <div class="pt-2">
                <input id="email" type="email" class="w-full p-2 rounded border bg-gray-200 focus:outline-none focus:border-gray-500 @error('email') bg-red-100 border-red-500 @enderror" name="email" value="{{ $email ?? old('email') }}" autocomplete="email" autofocus>

                @error('email')
                <span class="text-red-500 text-sm font-normal" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="pt-6 w-full">
            <label for="password" class="">{{ __('Password') }}</label>

            <div class="pt-2">
                <input id="password" type="password" class="w-full p-2 rounded border bg-gray-200 focus:outline-none focus:border-gray-500 @error('email') bg-red-100 border-red-500 @enderror" name="password" autocomplete="new-password">

                @error('password')
                <span class="text-red-500 text-sm font-normal" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="pt-6 w-full">
            <label for="password-confirm" class="">{{ __('Confirm Password') }}</label>

            <div class="pt-2">
                <input id="password-confirm" type="password" class="w-full p-2 rounded border bg-gray-200 focus:outline-none focus:border-gray-500 @error('email') bg-red-100 border-red-500 @enderror" name="password_confirmation" autocomplete="new-password">

                @error('password')
                <span class="text-red-500 text-sm font-normal" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="pt-6">
            <button type="submit" class="w-full bg-gray-600 hover:bg-gray-700 rounded text-white py-2 focus:outline-none focus:border-gray-500 border-2">
                {{ __('Reset Password') }}
            </button>
        </div>
    </form>
@endsection
