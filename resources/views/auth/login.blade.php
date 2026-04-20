@extends('layouts.app')
@section('main')
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

   <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-green-100 via-white to-green-50  mx-auto px-6 md:px-16">

    <div class="w-full bg-white/40 backdrop-blur-xl shadow-xl rounded-3xl p-8 border border-white/30 max-w-2xl">

        <!-- Title -->
        <div class="text-center mb-6">
            <h2 class="text-2xl font-bold text-gray-800">Welcome Back</h2>
            <p class="text-sm text-gray-500">Login ke akun kamu</p>
        </div>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email -->
            <div>
                <label class="text-sm text-gray-600">Email</label>
                <input id="email" type="email" name="email"
                    value="{{ old('email') }}"
                    required autofocus
                    class="w-full mt-1 px-4 py-2 rounded-xl border border-gray-300 focus:ring-2 focus:ring-green-500 focus:outline-none bg-white/70">
                
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password -->
            <div class="mt-4">
                <label class="text-sm text-gray-600">Password</label>
                <input id="password" type="password" name="password"
                    required
                    class="w-full mt-1 px-4 py-2 rounded-xl border border-gray-300 focus:ring-2 focus:ring-green-500 focus:outline-none bg-white/70">

                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Remember -->
            <div class="flex items-center justify-between mt-4 text-sm">
                <label class="flex items-center gap-2 text-gray-600">
                    <input type="checkbox" name="remember" class="rounded text-green-600">
                    Remember me
                </label>

                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-green-600 hover:underline">
                        Forgot?
                    </a>
                @endif
            </div>

            <!-- Button -->
            <button type="submit"
                class="w-full mt-6 bg-green-600 hover:bg-green-700 text-white py-2 rounded-xl transition duration-300 shadow-md">
                Login
            </button>

        </form>
    </div>

</div>
@endsection