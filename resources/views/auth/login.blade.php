<x-guest-layout>
  <div class="login-container">
    <h2>Iniciar Sesión</h2>
    <form method="POST" action="{{ route('login') }}">
      @csrf
      <div class="input-container">
        <i class="fas fa-user"></i> <!-- Icono de usuario de Font Awesome -->
        <input id="email" type="text" name="email" placeholder="Email" :value="old('email')" required autofocus>
      </div>
      <div class="input-container">
        <i class="fas fa-lock"></i> <!-- Icono de candado de Font Awesome -->
        <input id="password" type="password" name="password" placeholder="Contraseña" required>
      </div>
      <button type="submit">Iniciar Sesión</button>
      <!-- Remember Me -->
      <div class="block mt-4">
        <label for="remember_me" class="inline-flex items-center">
            <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
            <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
        </label>
      </div>
    </form>
    <p>Don't have an account? 
      <a href="" class="a2">Sign up!</a>
    </p>
  </div>
</x-guest-layout>
