<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex items-center justify-center min-h-screen bg-gray-100 p-6">
    <div class="bg-white shadow-lg rounded-2xl p-8 max-w-sm w-full">
        <h2 class="text-2xl font-bold text-gray-800 text-center">Register Page</h2>
        <p class="text-gray-500 text-center mb-6">Sign up your account</p>

        <form action="{{route('register')}}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" class="w-full mt-1 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" placeholder="johndoe@mail.com" required>
                @error('email')
                <p class="text-xs text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" class="w-full mt-1 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" placeholder="••••••••" required>
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition">Sign Up</button>
        </form>

        <p class="text-center text-gray-500 text-sm mt-4">
            Already have account ? <a href="{{route('login')}}" class="text-blue-500 hover:underline">Login</a>
        </p>
    </div>
</body>

</html>