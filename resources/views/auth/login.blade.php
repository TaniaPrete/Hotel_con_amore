<x-guest-layout>
    <div class="flex flex-col items-center justify-center min-h-screen bg-gray-100 p-6">
        <div class="bg-white shadow-lg rounded-2xl p-8 w-full max-w-md">
            <div class="text-center mb-6">
                <h2 id="form-title" class="text-2xl font-bold text-gray-800 transition-all duration-300">Accedi</h2>
            </div>

            <!-- Form di Login -->
            <form id="login-form" method="POST" action="{{ route('login') }}">
                @csrf

                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-2 w-full border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-300" type="email" name="email" required autofocus />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />
                    <x-text-input id="password" class="block mt-2 w-full border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-300" type="password" name="password" required />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="flex items-center justify-between mt-6">
                    <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white py-2 px-4 rounded-lg shadow-md transition-all duration-300">
                        {{ __('Login') }}
                    </button>
                </div>
            </form>

            <!-- Form di Registrazione (Nascosto inizialmente) -->
            <form id="register-form" method="POST" action="{{ route('register') }}" class="hidden transition-opacity duration-300">
            

                @csrf

                <div>
                    <x-input-label for="name" :value="__('Nome')" />
                    <x-text-input id="name" class="block mt-2 w-full border-gray-300 rounded-lg shadow-sm focus:border-green-500 focus:ring focus:ring-green-300" type="text" name="name" required />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-2 w-full border-gray-300 rounded-lg shadow-sm focus:border-green-500 focus:ring focus:ring-green-300" type="email" name="email" required />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />
                    <x-text-input id="password" class="block mt-2 w-full border-gray-300 rounded-lg shadow-sm focus:border-green-500 focus:ring focus:ring-green-300" type="password" name="password" required />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Conferma Password')" />
                    <x-text-input id="password_confirmation" class="block mt-2 w-full border-gray-300 rounded-lg shadow-sm focus:border-green-500 focus:ring focus:ring-green-300" type="password" name="password_confirmation" required />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="flex items-center justify-between mt-6">
                    <button type="submit" class="w-full bg-green-600 hover:bg-green-700 text-white py-2 px-4 rounded-lg shadow-md transition-all duration-300">
                        {{ __('Registrati') }}
                    </button>
                </div>
            </form>

            <!-- Bottone per Cambiare Modulo -->
            <div class="text-center mt-6">
                <button id="toggle-form" class="text-indigo-600 hover:underline font-semibold transition-all duration-300">
                    Non hai un account? Registrati
                </button>
            </div>
        </div>
    </div>

    <!-- JavaScript per alternare i moduli con animazione -->
    <script>
        document.getElementById("toggle-form").addEventListener("click", function() {
            var loginForm = document.getElementById("login-form");
            var registerForm = document.getElementById("register-form");
            var formTitle = document.getElementById("form-title");
            var toggleText = document.getElementById("toggle-form");

            if (loginForm.classList.contains("hidden")) {
                loginForm.classList.remove("hidden");
                registerForm.classList.add("hidden");
                formTitle.innerText = "Accedi";
                toggleText.innerText = "Non hai un account? Registrati";
            } else {
                loginForm.classList.add("hidden");
                registerForm.classList.remove("hidden");
                formTitle.innerText = "Registrati";
                toggleText.innerText = "Hai già un account? Accedi";
            }
        });
    </script>
</x-guest-layout>
