@extends('layouts.auth')

@section('title')
    Confirm Your Password
@endsection

@section('content')
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        {{--        <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-on-white.svg" alt="Logo" />--}}
        <svg viewBox="0 0 319 59" xmlns="http://www.w3.org/2000/svg" class="fill-current h-8 w-auto mx-auto text-gray-700"><path d="M85.7528 56H93.6534V37.5909H104.392C116.537 37.5909 122.545 30.2528 122.545 20.5881C122.545 10.9489 116.588 3.63636 104.418 3.63636H85.7528V56ZM93.6534 30.892V10.4119H103.574C111.398 10.4119 114.594 14.6562 114.594 20.5881C114.594 26.5199 111.398 30.892 103.676 30.892H93.6534ZM139.008 56H146.908V36.1847H157.647C157.826 36.1847 157.979 36.1847 158.158 36.1847L168.794 56H177.794L166.187 34.804C172.604 32.4261 175.8 27.0824 175.8 20.0511C175.8 10.4119 169.817 3.63636 157.672 3.63636H139.008V56ZM146.908 29.3835V10.4119H156.829C164.627 10.4119 167.848 14.1193 167.848 20.0511C167.848 25.9574 164.627 29.3835 156.931 29.3835H146.908ZM200.514 3.63636H192.614V56H200.514V3.63636ZM223.797 3.63636H215.257L234.101 56H243.229L262.072 3.63636H253.533L238.959 46.2841H238.371L223.797 3.63636ZM272.794 3.63636L291.791 35.4432V56H299.666V35.4432L318.664 3.63636H309.689L296.01 27.4403H295.448L281.769 3.63636H272.794Z"></path> <path data-v-34a84aa4="" d="M62 0.875V59H0V0.875H62ZM58.125 4.75H3.875V55.125H58.125V4.75ZM11.625 43.5H7.75V39.625H11.625V20.25H7.75V16.375H11.625V8.625H54.25V51.25H11.625V43.5ZM15.5 47.375H50.375V12.5H15.5V47.375ZM32.9375 43.5C31.0605 43.5 29.2946 43.1468 27.6396 42.4404C26.0049 41.734 24.5719 40.7653 23.3408 39.5342C22.1097 38.3031 21.141 36.8701 20.4346 35.2354C19.7282 33.5804 19.375 31.8145 19.375 29.9375C19.375 28.0605 19.7282 26.3047 20.4346 24.6699C21.141 23.015 22.1097 21.5719 23.3408 20.3408C24.5719 19.1097 26.0049 18.141 27.6396 17.4346C29.2946 16.7282 31.0605 16.375 32.9375 16.375C34.8145 16.375 36.5703 16.7282 38.2051 17.4346C39.86 18.141 41.3031 19.1097 42.5342 20.3408C43.7653 21.5719 44.734 23.015 45.4404 24.6699C46.1468 26.3047 46.5 28.0605 46.5 29.9375C46.5 31.8145 46.1468 33.5804 45.4404 35.2354C44.734 36.8701 43.7653 38.3031 42.5342 39.5342C41.3031 40.7653 39.86 41.734 38.2051 42.4404C36.5703 43.1468 34.8145 43.5 32.9375 43.5ZM31 20.4316C30.0514 20.6335 29.1634 20.9665 28.3359 21.4307C27.5085 21.8747 26.7617 22.4297 26.0957 23.0957C25.4297 23.7617 24.8646 24.5085 24.4004 25.3359C23.9564 26.1634 23.6335 27.0514 23.4316 28H27.125V31.875H23.4316C23.6335 32.8236 23.9564 33.7116 24.4004 34.5391C24.8646 35.3665 25.4297 36.1133 26.0957 36.7793C26.7617 37.4453 27.5085 38.0104 28.3359 38.4746C29.1634 38.9186 30.0514 39.2415 31 39.4434V35.75H34.875V39.4434C35.8236 39.2415 36.7116 38.9186 37.5391 38.4746C38.3665 38.0104 39.1133 37.4453 39.7793 36.7793C40.4453 36.1133 41.0003 35.3665 41.4443 34.5391C41.9085 33.7116 42.2415 32.8236 42.4434 31.875H38.75V28H42.4434C42.2415 27.0514 41.9085 26.1634 41.4443 25.3359C41.0003 24.5085 40.4453 23.7617 39.7793 23.0957C39.1133 22.4297 38.3665 21.8747 37.5391 21.4307C36.7116 20.9665 35.8236 20.6335 34.875 20.4316V24.125H31V20.4316Z"></path></svg>
        <h2 class="mt-8 text-center text-3xl leading-9 font-extrabold text-gray-900">
            Confirm your password
        </h2>
        {{--        <p class="mt-2 text-center text-sm leading-5 text-gray-600 max-w">--}}
        {{--            Or--}}
        {{--            <a href="{{ route('password.confirm') }}" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">--}}
        {{--                start a 14-day free trial--}}
        {{--            </a>--}}
        {{--        </p>--}}
    </div>

    <div class="card-body">
        @if (session('status'))
            <div class="p-3 text-green-500 bg-green-100 border border-green-500 rounded" role="alert">
                {{ session('status') }}
            </div>
        @endif
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="bg-white py-8 px-8 sm:px-4 sm:shadow sm:rounded-lg sm:px-10">
            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf
                <div>
                    <label for="password" class="block text-sm font-medium leading-5 text-gray-700">
                        {{ __('Password') }}
                    </label>

                    <div class="mt-1 relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-300 @error('password') text-red-300 @enderror" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                            </svg>
                        </div>
                        <input id="password" type="password" class="form-input block w-full sm:text-sm sm:leading-5 pl-10 @error('password') pr-10 border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red @enderror" name="password" autocomplete="current-password" autofocus>
                        @error('password')
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
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
                    <span class="block w-full rounded-md shadow-sm">
                        <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                            {{ __('Confirm Password') }}
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </div>
@endsection
