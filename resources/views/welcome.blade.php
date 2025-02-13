<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex justify-center items-center min-h-screen bg-gradient-to-r from-[#434343] via-[#000000] to-[#b8b8b8]">
    <div class="flex flex-col justify-center items-center text-center">
        <h1 class="font-bold text-white italic text-4xl">Welcome to Book Management App</h1>
        <p class="text-white max-w-md">Create your book list with simple app</p>
        <a href="{{route('books.create')}}">
            <button class="bg-gray-500 rounded-lg py-3 px-6 mt-6 transition-transfrom duration-200 hover:scale-y-110 hover:translate-y-2">Create Now
            </button>
        </a>
    </div>

</body>

</html>