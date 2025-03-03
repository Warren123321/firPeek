<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4 " :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <a class="text-4xl font-bold block text-center mb-8">Login to your Account</a>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full shadow-inner-xl placeholder-gray-600 px-4 py-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500"  
                                     placeholder="Enter your gmail" 
                                     type="email" name="email" 
                                     :value="old('email')" 
                                     required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full shadow-inner placeholder-gray-600 px-4 py-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500"  
                            placeholder="••••••••"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="flex items-center justify-between mt-4">
            <div class="flex items-center">
                <input id="remember_me" 
                       type="checkbox" 
                       class="mr-2">
                <label for="remember_me" 
                        class="text-sm text-gray-600">Remember me</label>
            </div>

            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" 
                    class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </div>

        <div class="flex justify-center mt-4">
            <x-primary-button>
                {{ __('Sign In') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
