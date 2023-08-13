<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div>
        <p class="text-lg md:text-xl py-5 uppercase text-center font-bold text-gray-200">Login with LOGO</p>
    </div>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <div class="flex w-full items-center bg-zinc-200 rounded overflow-hidden p-2 text-gray-800">
                <svg viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 m-2 opacity-50 stroke-current">
                    <path d="m58.003 8h-52.007c-3.3137 0-6 2.6862-6 6v36c0 3.3137 2.6863 6 6 6h52.007c3.3137 0 6-2.6863 6-6v-36c9e-7 -3.3138-2.6863-6-6-6zm4 41.111-18.919-18.919 18.919-12.056v30.974zm-56.007-39.111h52.007c2.2056 0 4 1.7943 4 4v1.7664l-27.536 17.547c-1.4902 0.9493-3.3935 0.92-4.8496-0.070301l-27.622-18.774v-0.4695c0-2.2057 1.7945-4 4-4zm-4 6.8852 19.186 13.04-19.186 19.186v-32.226zm56.007 37.115h-52.007c-1.6474 0-3.0639-1.0021-3.6761-2.4279l20.52-20.52 5.6548 3.8434c1.0859 0.7383 2.3418 1.1084 3.5996 1.1084 1.1953 0 2.3925-0.334 3.4463-1.0049l5.8424-3.723 20.296 20.296c-0.6122 1.4258-2.0287 2.4279-3.6761 2.4279z"></path>
                </svg>

                <x-text-input class="block mt-1 w-full bg-zinc-200" id="email" placeholder="Email" type="email" name="email" :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <!-- <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
             -->
        </div>

        <!-- Password -->
        <div class="flex w-full items-center bg-zinc-200 rounded overflow-hidden p-2 mt-4">
                <svg viewBox="0 0 485 485" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 m-2 opacity-30 stroke-current">
                    <path d="m242.5 253.93c-19.299 0-35 15.701-35 35 0 13.934 8.186 25.989 20 31.616v53.568h30v-53.569c11.814-5.628 20-17.682 20-31.616 0-19.298-15.701-34.999-35-34.999z"></path>
                    <path d="m345 173.84v-71.344c0-56.519-45.981-102.5-102.5-102.5s-102.5 45.981-102.5 102.5v71.344c-42.438 31.455-70 81.895-70 138.66 0 95.117 77.383 172.5 172.5 172.5s172.5-77.383 172.5-172.5c0-56.761-27.562-107.2-70-138.66zm-175-71.344c0-39.977 32.523-72.5 72.5-72.5s72.5 32.523 72.5 72.5v53.498c-22.054-10.257-46.618-15.998-72.5-15.998s-50.446 5.741-72.5 15.999v-53.499zm72.5 352.5c-78.575 0-142.5-63.925-142.5-142.5s63.925-142.5 142.5-142.5 142.5 63.925 142.5 142.5-63.925 142.5-142.5 142.5z"></path>
                </svg>

                <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            placeholder="Password"
                            required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded bg-[#FEE715] border-gray-300 dark:border-gray-700 text-[#101820] shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-200">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-200 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
