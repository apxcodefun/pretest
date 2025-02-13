<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex items-center justify-center min-h-screen bg-gray-100 p-6">
    <div class="bg-white shadow-lg rounded-2xl p-8 max-w-sm w-full">
        <h2 class="text-2xl font-bold text-gray-800 text-center">Selamat Datang !</h2>
        <p class="text-gray-500 text-center mb-6">Silahkan masukkan akun anda yang telah terdaftar</p>
        @if ($errors->any())
        <div class="bg-red-100 text-red-600 p-3 rounded-lg text-sm mb-4">
            @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
            @endforeach
        </div>
        @endif
        <form action="#" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}"
                    class="w-full mt-1 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none @error('email') border-red-500 @enderror"
                    placeholder="johndoe@mail.com" required>
                @error('email')
                <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div class="relative">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <div class="relative">
                    <input type="password" id="password" name="password"
                        class="w-full mt-1 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none pr-10"
                        placeholder="••••••••" required>

                    <span id="togglePassword"
                        class="absolute inset-y-0 right-3 flex items-center h-full cursor-pointer text-gray-500">
                        Lihat
                    </span>
                </div>

                @error('password')
                <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition">Login</button>
        </form>
        @if(session('error'))
        <div class="bg-red-100 text-red-600 p-3 rounded-lg text-sm mb-4 mt-2">
            {{ session('error') }}
        </div>
        @endif
        <p class="text-center text-gray-500 text-sm mt-4">
            Belum punya akun ? <a href="{{route('register')}}" class="text-blue-500 hover:underline">Daftar</a>
        </p>
    </div>
</body>
<script>
    document.getElementById('togglePassword').addEventListener('click', function() {
        let passwordInput = document.getElementById('password');
        let isPassword = passwordInput.type === 'password';

        passwordInput.type = isPassword ? 'text' : 'password';
        this.textContent = isPassword ? 'Hilang' : 'Lihat';
    })
</script>

</html>