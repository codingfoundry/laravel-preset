@extends('layouts.auth')

@section('title')
    Register your account
@endsection

@section('content')
    <x-auth-heading message="Register your account" />

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="bg-white py-8 px-8 sm:px-4 sm:shadow sm:rounded-lg sm:px-10">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div>
                    <label for="name" class="block text-sm font-medium leading-5 text-gray-700">
                        {{ __('Name') }}
                    </label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-300 @error('name') text-red-300 @enderror" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                            </svg>
                        </div>
                        <input name="name" id="name" type="text" class="form-input block w-full sm:text-sm sm:leading-5 pl-10 @error('name') pr-10 border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red @enderror" value="{{ old('name') }}" autocomplete="name" autofocus>
                        @error('name')
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        @enderror
                    </div>
                    @error('name')
                    <p class="mt-2 text-sm text-red-600">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <div class="mt-6">
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
                    <div class="relative">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-gray-300"></div>
                        </div>
                        <div class="relative flex justify-center text-sm leading-5">
                        <span class="px-2 bg-white text-gray-500">
                          Security
                        </span>
                        </div>
                    </div>


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

                <div class="mt-6">
                    <label for="password_confirmation" class="block text-sm font-medium leading-5 text-gray-700">
                        {{ __('Confirm Password') }}
                    </label>

                    <div class="mt-1 relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-300 @error('password_confirmation') text-red-300 @enderror" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                            </svg>
                        </div>
                        <input id="password_confirmation" type="password" name="password_confirmation" class="form-input block w-full sm:text-sm sm:leading-5 pl-10 @error('password_confirmation') pr-10 border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red @enderror" autocomplete="password_confirmation">
                        @error('password_confirmation')
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        @enderror
                    </div>
                    @error('password_confirmation')
                    <p class="mt-2 text-sm text-red-600">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

{{--                <div class="mt-6">--}}
{{--                    <div class="relative">--}}
{{--                        <div class="absolute inset-0 flex items-center">--}}
{{--                            <div class="w-full border-t border-gray-300"></div>--}}
{{--                        </div>--}}
{{--                        <div class="relative flex justify-center text-sm leading-5">--}}
{{--                        <span class="px-2 bg-white text-gray-500">--}}
{{--                          Profile--}}
{{--                        </span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div >--}}
{{--                    <label for="language_id" class="block text-sm font-medium leading-5 text-gray-700">{{ __('general.language') }}</label>--}}
{{--                    <select aria-label="Language" name="language_id" class="mt-1 form-select relative block w-full rounded-none rounded-md bg-transparent focus:z-10 transition ease-in-out duration-150 sm:text-sm sm:leading-5">--}}
{{--                        @foreach(language_list() as $language)--}}
{{--                            <option value="{{ $language['id'] }}">{{ $language['language'] }}</option>--}}
{{--                        @endforeach--}}
{{--                    </select>--}}
{{--                    @error('language_id')--}}
{{--                    <span class="text-red-800 font-light" role="alert">--}}
{{--                        <strong>{{ $message }}</strong>--}}
{{--                    </span>--}}
{{--                    @enderror--}}
{{--                </div>--}}

{{--                <div class="mt-6">--}}
{{--                    <label for="timezone" class="block text-sm font-medium leading-5 text-gray-700">{{ __('general.timezone') }}</label>--}}
{{--                    <select aria-label="Timezone" name="timezone" class="mt-1 form-select relative block w-full rounded-none rounded-md bg-transparent focus:z-10 transition ease-in-out duration-150 sm:text-sm sm:leading-5">--}}
{{--                        @foreach (generate_timezone_list() as $tz => $desc)--}}
{{--                            <option {{ $tz == get_local_timezone() ? 'selected' : '' }} value="{{ $tz }}">{{ $desc }}</option>--}}
{{--                        @endforeach--}}
{{--                    </select>--}}
{{--                    @error('timezone')--}}
{{--                    <span class="text-red-800 font-light" role="alert">--}}
{{--                        <strong>{{ $message }}</strong>--}}
{{--                    </span>--}}
{{--                    @enderror--}}
{{--                </div>--}}

                {{--                <div class="mt-6">--}}
                {{--                    <div class="relative">--}}
                {{--                        <div class="absolute inset-0 flex items-center">--}}
                {{--                            <div class="w-full border-t border-gray-300"></div>--}}
                {{--                        </div>--}}
                {{--                        <div class="relative flex justify-center text-sm leading-5">--}}
                {{--                        <span class="px-2 bg-white text-gray-500">--}}
                {{--                          Team--}}
                {{--                        </span>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}

                {{--                <div>--}}
                {{--                    <label for="name" class="block text-sm font-medium leading-5 text-gray-700">--}}
                {{--                        {{ __('Team') }}--}}
                {{--                    </label>--}}
                {{--                    <div class="mt-1 relative rounded-md shadow-sm">--}}
                {{--                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">--}}
                {{--                            <svg class="h-5 w-5 text-gray-300 @error('team') text-red-300 @enderror" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
                {{--                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>--}}
                {{--                            </svg>--}}
                {{--                        </div>--}}
                {{--                        <input name="team" id="team" type="text" class="form-input block w-full sm:text-sm sm:leading-5 pl-10 @error('team') pr-10 border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red @enderror" value="{{ old('team') }}" autocomplete="team" autofocus>--}}
                {{--                        @error('team')--}}
                {{--                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">--}}
                {{--                            <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">--}}
                {{--                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />--}}
                {{--                            </svg>--}}
                {{--                        </div>--}}
                {{--                        @enderror--}}
                {{--                    </div>--}}
                {{--                    @error('team')--}}
                {{--                    <p class="mt-2 text-sm text-red-600">--}}
                {{--                        {{ $message }}--}}
                {{--                    </p>--}}
                {{--                    @enderror--}}
                {{--                </div>--}}

                <div class="mt-6">
                    <span class="block w-full rounded-md shadow-sm">
                        <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                            {{ __('Register') }}
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
                            <button type="button" class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-md bg-white text-sm leading-5 font-medium text-gray-500 hover:text-gray-400 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition duration-150 ease-in-out">
                                <svg class="h-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M20 10c0-5.523-4.477-10-10-10S0 4.477 0 10c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V10h2.54V7.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V10h2.773l-.443 2.89h-2.33v6.988C16.343 19.128 20 14.991 20 10z" clip-rule="evenodd"/>
                                </svg>
                            </button>
                        </span>
                    </div>

                    <div>
                        <span class="w-full inline-flex rounded-md shadow-sm">
                            <button type="button" class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-md bg-white text-sm leading-5 font-medium text-gray-500 hover:text-gray-400 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition duration-150 ease-in-out">
                                <svg class="h-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84"/>
                                </svg>
                            </button>
                        </span>
                    </div>

                    <div>
                        <span class="w-full inline-flex rounded-md shadow-sm">
                            <button type="button" class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-md bg-white text-sm leading-5 font-medium text-gray-500 hover:text-gray-400 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition duration-150 ease-in-out">
                                <svg class="h-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 0C4.477 0 0 4.484 0 10.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0110 4.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.203 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.942.359.31.678.921.678 1.856 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0020 10.017C20 4.484 15.522 0 10 0z" clip-rule="evenodd"/>
                                </svg>
                            </button>
                        </span>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
