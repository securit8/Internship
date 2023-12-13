<x-guest-layout>
    <div class="auth_card_layout">
        <x-auth-card>
            <x-slot name="logo">
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </x-slot>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-label for="email" :value="__('Email')" style="color: rgba(53, 101, 173, 1); font-weight: 700; font-size: 15px" />

                    <x-input id="email" class="block mt-1 w-full" style="background-color: ;" type="email" name="email" :value="old('email')" required autofocus />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-label for="password" :value="__('Password')" style="color: rgba(53, 101, 173, 1); font-weight: 700; font-size: 15px"/>

                    <x-input id="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password" />
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" style="color: rgba(53, 101, 173, 1); outline: none;" class="rounded border-gray-300 shadow-sm" name="remember">
                        <span class="ml-2 text-sm" style="color: rgba(53, 101, 173, 1);">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="grid grid-cols-1 items-center justify-end mt-4">

                    <x-button class="mb-4 col-1 text-center flex justify-center bg-black">
                        {{ __('Log in') }}
                    </x-button>

                    @if (Route::has('password.request'))
                        <a class="underline col-1 text-center" style="color: rgba(53, 101, 173, 1);" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                </div>
            </form>
        </x-auth-card>

        <div class="login_visual_design px-4">
            <div class="flex visual_part_header" style="justify-content: center; width: 100%;">
                <div class="flex flex-col justify-top"> <!-- Corrected typo here -->
                    <div>
                        <img src="{{ asset('images/search.svg') }}" style="width: 70%; height: 70%; position: relative; bottom: -15px;">
                    </div>
                    <h4><b>Search</b></h4>
                </div>

                <div class="mt-4" style="width: 2px; border: 2px solid black; height: 35px; margin-left: 1rem; margin-right: 1rem;"></div>

                <div class="flex mt-4">
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-white rounded">
                        <div class="auth_link_button auth_link_button" style="background-color: black; padding: 0.4rem; border-radius: 15px; padding-right: 2rem; padding-left: 2rem;">
                            join
                        </div>
                    </a>

                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-white">
                        <div class="auth_link_button auth_link_button" style="background-color: black; padding: 0.4rem; border-radius: 15px; padding-right: 2rem; padding-left: 2rem;">
                            Sign up
                        </div>
                    </a>
                </div>
            </div>

            <div style="width: 100%; height: 100%; display: flex; flex-direction: column; align-items: center; padding-top: 5rem;">
                <div style="width: 300px; height: 160px;" class="school1">
                    <img src="{{ asset('images/school1.jpg') }}" style="width: 100%; height: 100%; border-radius: 40%; overflow: hidden;">
                </div>

                <div style="display: flex">
                    <div style="width: 300px; height: 160px; border-radius: 40%; margin-right: 5px;" class="school2">
                        <img src="{{ asset('images/school2.jpg') }}" style="width: 100%; height: 100%; border-radius: 40%; overflow: hidden;">
                    </div>

                    <div style="width: 300px; height: 160px; border-radius: 40%;" class="school3">
                        <img src="{{ asset('images/school3.jpg') }}" style="width: 100%; height: 100%; border-radius: 40%; overflow: hidden;">
                    </div>
                </div>
            </div>
        </div>


    </div>


</x-guest-layout>
