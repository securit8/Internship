<x-guest-layout>
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
                <x-label for="email" :value="__('Email')" style="color: rgba(244, 51, 51, 1); font-weight: 700; font-size: 15px" />

                <x-input id="email" class="block mt-1 w-full" style="background-color: ;" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" style="color: rgba(244, 51, 51, 1); font-weight: 700; font-size: 15px"/>

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" style="color: rgba(244, 51, 51, 1); outline: none;" class="rounded border-gray-300 shadow-sm" name="remember">
                    <span class="ml-2 text-sm" style="color: rgba(244, 51, 51, 1);">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="grid grid-cols-1 items-center justify-end mt-4">

                <x-button class="mb-4 col-1 text-center flex justify-center bg-black">
                    {{ __('Log in') }}
                </x-button>

                @if (Route::has('password.request'))
                    <a class="underline col-1 text-center" style="color: rgba(244, 51, 51, 1);" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
