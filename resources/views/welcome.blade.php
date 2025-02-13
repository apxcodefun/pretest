<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex flex-col">
    <!-- Navbar -->
    <nav class="bg-white shadow-md py-4">
        <div class="max-w-6xl mx-auto px-6 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-gray-800">📚 Manajemen Buku</h1>
            <a href="{{ route('login') }}">
                <button class="rounded-lg bg-zinc-900 py-3 px-6 text-white transition-transform hover:translate-x-1 duration-200 animate-pulse">
                    Login
                </button>
            </a>
        </div>
    </nav>

    <!-- Konten Utama -->
    <main class="flex items-center justify-center px-6 py-12">
        <div class="w-full max-w-4xl bg-white shadow-md rounded-lg p-6 flex flex-col md:flex-row items-center md:items-start gap-6">
            <!-- Gambar -->
            <img src="{{ asset('images/book.png') }}" alt="Buku" class="w-40 h-40 md:w-[250px] md:h-[250px]">

            <!-- Teks -->
            <div class="flex flex-col items-center md:items-start text-center md:text-left space-y-3">
                <h1 class="text-2xl font-bold text-gray-800 italic">Selamat Datang di Aplikasi Sederhana Buku Manajemen</h1>
                <p class="max-w-md text-gray-600">
                    Aplikasi ini memungkinkan kamu mengelola koleksi bukumu sendiri dengan mudah dan aman. Silakan login untuk mengakses dan mengatur daftar bukumu secara pribadi.
                </p>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-white shadow-md py-4 text-center mt-auto">
        <p class="text-gray-500 text-sm">&copy; {{ date('Y') }} Manajemen Buku. Banda Aceh</p>
    </footer>
</body>

</html>