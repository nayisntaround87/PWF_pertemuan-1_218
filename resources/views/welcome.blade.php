<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Identitas Mahasiswa - Laravel</title>

    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>

<body class="bg-gradient-to-br from-indigo-100 via-purple-100 to-pink-100 min-h-screen">

    <!-- NAVBAR -->
    <nav class="bg-white shadow-md px-8 py-4 flex justify-between items-center">
        <h1 class="font-semibold text-indigo-600 text-lg">
            Sistem Identitas Mahasiswa
        </h1>

        <div>
            @guest
                <a href="{{ route('login') }}" 
                   class="px-4 py-2 text-sm font-medium text-indigo-600 hover:text-white hover:bg-indigo-600 rounded-lg transition">
                    Login
                </a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" 
                       class="ml-2 px-4 py-2 text-sm font-medium text-purple-600 hover:text-white hover:bg-purple-600 rounded-lg transition">
                        Register
                    </a>
                @endif
            @endguest

            @auth
                <span class="mr-4 text-sm font-medium text-gray-700">
                    {{ auth()->user()->name }}
                </span>

                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit"
                        class="px-4 py-2 text-sm font-medium text-white bg-red-500 hover:bg-red-600 rounded-lg transition">
                        Logout
                    </button>
                </form>
            @endauth
        </div>
    </nav>


    <!-- CONTENT -->
    <div class="flex justify-center items-center mt-16">
        <div class="w-full max-w-md">
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden">

                <div class="bg-gradient-to-r from-indigo-500 to-purple-600 p-6 text-white">
                    <h2 class="text-lg font-semibold tracking-wide">
                        Kartu Identitas Mahasiswa
                    </h2>
                </div>

                <div class="p-8 space-y-6">
                    <div>
                        <label class="text-xs uppercase tracking-widest text-gray-500 font-bold">
                            Nama Lengkap
                        </label>
                        <p class="text-xl font-semibold text-gray-800">
                            Nayla Salwa
                        </p>
                    </div>

                    <div class="border-t pt-4">
                        <label class="text-xs uppercase tracking-widest text-gray-500 font-bold">
                            Nomor Induk Mahasiswa
                        </label>
                        <p class="text-2xl font-mono font-bold text-indigo-600">
                            20230140218
                        </p>
                    </div>
                </div>

                <div class="bg-gray-50 py-4 text-center text-sm text-gray-500">
                    Tugas Modifikasi Template Laravel
                </div>

            </div>

            <div class="mt-6 text-center">
                <a href="/" class="text-indigo-600 hover:underline">
                    Kembali ke Beranda
                </a>
            </div>
        </div>
    </div>

</body>
</html>