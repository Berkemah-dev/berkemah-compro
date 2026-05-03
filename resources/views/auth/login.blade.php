@extends('layouts.app')

@section('title', 'Login - Mahya HRIS')

@section('content')
<section class="pt-16 min-h-screen bg-gradient-to-br from-white via-green-50 to-blue-50 flex items-center">
    <div class="max-w-md mx-auto px-4 sm:px-6 lg:px-8 py-20 w-full">
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold mb-2">
                <span class="text-green-600">Mahya</span>
                <span class="text-blue-600"> HRIS</span>
            </h1>
            <p class="text-gray-600">Masuk ke Dashboard Perusahaan</p>
        </div>

        <div class="bg-white p-8 rounded-3xl shadow-xl">
            @if(session('error'))
                <div class="bg-red-100 border-l-4 border-red-500 p-4 rounded-lg mb-6">
                    <p class="text-red-700">{{ session('error') }}</p>
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-6">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        Nama Perusahaan (PT)
                    </label>
                    <input type="text" name="name" required
                           class="w-full px-4 py-3 rounded-xl border-2 border-gray-300 focus:border-green-500 focus:outline-none transition-colors"
                           placeholder="PT Nama Perusahaan">
                </div>

                <div class="mb-6">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        Password
                    </label>
                    <input type="password" name="password" required
                           class="w-full px-4 py-3 rounded-xl border-2 border-gray-300 focus:border-green-500 focus:outline-none transition-colors"
                           placeholder="••••••••">
                </div>

                <button type="submit" 
                        class="w-full bg-gradient-to-r from-green-500 to-blue-500 text-white py-4 rounded-xl font-semibold text-lg hover:shadow-xl transition-all duration-300">
                    Masuk
                </button>
            </form>

            <div class="mt-6 text-center">
                <a href="/" class="text-green-600 hover:text-green-700 text-sm">
                    ← Kembali ke Beranda
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
