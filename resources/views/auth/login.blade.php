<x-guest-layout title="login">

    <x-header />

    <div class="flex flex-col items-center justify-center w-full text-center py-4">
        <h1 class="text-4xl font-semibold text-green-600 tracking-tight">
            Login
        </h1>

        <div class="text-center mt-2 w-full max-w-sm mx-auto">
            <p class="text-gray-500 text-base font-medium leading-relaxed">
                Silahkan masukkan email dan password Anda untuk masuk ke akun Anda.
            </p>
        </div>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('authlogin') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" class="text-gray-600 text-sm font-medium pb-1" :value="__('Masukkan Email Anda')" />

            <x-text-input id="email"
                class="block w-full border-gray-300 focus:border-green-500 focus:ring-green-500 rounded-lg shadow-sm"
                type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />

            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="my-4">
            <x-input-label for="password" class="text-gray-600 text-sm font-medium pb-1" :value="__('Masukkan Password Anda')" />

            <x-text-input id="password"
                class="block w-full border-gray-300 focus:border-green-500 focus:ring-green-500 rounded-lg shadow-sm"
                type="password" name="password" required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>


        {{-- <a href="{{ route('register') }}"
                class="inline-flex items-center px-4 py-2 bg-green-600 border border-transparent rounded-md text-xs font-semibold text-white uppercase tracking-widest
                            hover:bg-green-700 focus:bg-green-700 active:bg-green-800
                            focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2
                            transition ease-in-out duration-150">
                Register
            </a> --}}


        <div class="mt-4">
            @if (Route::has('password.request'))
                <div class="flex justify-end pb-2 ">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        href="{{ route('password.request') }}">
                        {{ __('Lupa Password?') }}
                    </a>
                </div>
            @endif

            <x-primary-button style="padding-top: 1rem !important; padding-bottom: 1rem !important;"
                class="w-full justify-center !bg-green-600 hover:!bg-green-700 focus:!bg-green-700 active:!bg-green-800 font-bold">
                {{ __('Log in') }}
            </x-primary-button>



            <p class="text-center pt-2 text-sm text-gray-600">
                Belum punya akun?
                <a href="{{ route('register') }}" class="text-green-600 hover:text-green-700 hover:underline">
                    Daftar sekarang
                </a>
            </p>
        </div>

    </form>


    </form>

    @if (session('success'))
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: '{{ session('success') }}',
                timer: 3000,
                showConfirmButton: false
            });
        </script>
    @endif

    @if (session('throttle_popup'))
        <div id="popup" class="fixed top-5 right-5 bg-red-500 text-white px-4 py-2 rounded shadow-lg">
            {{ session('throttle_popup') }}
        </div>

        <script>
            setTimeout(() => {
                document.getElementById('popup').style.display = 'none';
            }, 3000);
        </script>
    @endif


</x-guest-layout>
