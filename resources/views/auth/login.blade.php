<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <!--<x-jet-authentication-card-logo />-->
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="select-none mt-6 mb-6 text-center text-3xl font-extrabold text-gray-900">
                <h2>
                    Connectez-vous à votre compte
                </h2>
            </div>

            <div>
                <x-jet-label for="email" class="select-none" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" class="select-none" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            {{-- <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div> --}}

           <!-- <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif -->

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                        {{ __('Pas encore inscrit ?') }}
                    </a>

                    <x-jet-button class="ml-4 bg-blue-600 hover:bg-blue-900">
                        {{ __('Log in') }}
                    </x-jet-button>
                </div>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
