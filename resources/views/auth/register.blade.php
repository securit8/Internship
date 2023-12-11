<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" style="color: rgba(244, 51, 51, 1); font-weight: 700; font-size: 15px"/>

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" style="color: rgba(244, 51, 51, 1); font-weight: 700; font-size: 15px"/>

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" style="color: rgba(244, 51, 51, 1); font-weight: 700; font-size: 15px"/>

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" style="color: rgba(244, 51, 51, 1); font-weight: 700; font-size: 15px"/>

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="grid grid-cols-1 mt-4">

                <x-button class="mb-2 mb-4 col-1 text-center flex justify-center">
                    {{ __('Register') }}
                </x-button>


                <a class="underline text-center" style="color: rgba(244, 51, 51, 1);" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>


            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
