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
            <h1 class="text-2xl font-bold text-gray-800">📚 Book Management</h1>
            <ul class="flex space-x-6 justify-center items-center">
                <li><a href="{{route('books.index')}}" class="text-gray-600 hover:text-blue-500 transition">Home</a></li>
                <li><a href="{{route('books.create')}}" class="text-gray-600 hover:text-blue-500 transition">Create</a></li>
                <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <li><button class="text-white px-4 py-2 rounded-lg transition hover:cursor bg-zinc-950">Logout</button></li>
                </form>
            </ul>
        </div>
    </nav>

    <!-- Konten -->
    <main class="flex-1 flex items-center justify-center px-6 py-12">
        <div class="w-full max-w-4xl bg-white shadow-md rounded-lg p-6">
            @yield('content')
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-white shadow-md py-4 text-center mt-auto">
        <p class="text-gray-500 text-sm">&copy; 2025 Book Management. All rights reserved.</p>
    </footer>
</body>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll('input[type=number]').forEach(input => {
            // Mencegah perubahan nilai saat scroll
            input.setAttribute('onwheel', 'return false');

            // Menghapus spinner dengan menambahkan CSS langsung ke elemen
            input.style.cssText = `
            -moz-appearance: textfield;
            appearance: textfield;
        `;

            // Menghapus spinner khusus untuk browser berbasis Webkit (Chrome, Safari)
            let style = document.createElement('style');
            style.innerHTML = `
            input[type="number"]::-webkit-inner-spin-button,
            input[type="number"]::-webkit-outer-spin-button {
                -webkit-appearance: none;
                margin: 0;
            }
        `;
            document.head.appendChild(style);
        });
    });
</script>

</html>