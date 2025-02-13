@extends('book')

@section('content')
<div class="w-full max-w-3xl mx-auto">
    <!-- Header Section -->
    <div class="bg-white p-6 rounded-t-xl shadow-sm mb-6 flex justify-between items-center">
        <div>
            <h2 class="text-2xl font-bold text-gray-800">Add New Book</h2>
            <p class="text-gray-500 mt-1">Fill in the book details below</p>
        </div>
        <a href="{{ route('books.index') }}" class="flex items-center text-gray-600 hover:text-blue-500 transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
            </svg>
            <span class="ml-2">Back to List</span>
        </a>
    </div>

    <!-- Form -->
    <div class="bg-white rounded-xl shadow-lg p-6">
        <form action="{{ route('books.store') }}" method="POST" class="space-y-4">
            @csrf
            <input type="hidden" name="user_id" value="{{ auth()->id() }}">

            <!-- Title Field -->
            <div>
                <label for="judul" class="text-sm font-semibold text-gray-700">Book Title</label>
                <input type="text" name="judul" id="judul" class="w-full px-3 py-2 mt-1 rounded-md border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition @error('judul') border-red-500 @enderror" placeholder="Enter book title" required>
                @error('judul')<p class="text-sm text-red-600">{{ $message }}</p>@enderror
            </div>

            <!-- Author Field -->
            <div>
                <label for="penulis" class="text-sm font-semibold text-gray-700">Author</label>
                <input type="text" name="penulis" id="penulis" class="w-full px-3 py-2 mt-1 rounded-md border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition @error('penulis') border-red-500 @enderror" placeholder="Enter author name" required>
                @error('penulis')<p class="text-sm text-red-600">{{ $message }}</p>@enderror
            </div>

            <!-- Publisher Field -->
            <div>
                <label for="penerbit" class="text-sm font-semibold text-gray-700">Publisher</label>
                <input type="text" name="penerbit" id="penerbit" class="w-full px-3 py-2 mt-1 rounded-md border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition @error('penerbit') border-red-500 @enderror" placeholder="Enter publisher name" required>
                @error('penerbit')<p class="text-sm text-red-600">{{ $message }}</p>@enderror
            </div>

            <!-- Year Field -->
            <div>
                <label for="tahun_terbit" class="text-sm font-semibold text-gray-700">Publication Year</label>
                <input type="number" name="tahun_terbit" id="tahun_terbit" min="1900" max="{{ date('Y') }}" class="w-full px-3 py-2 mt-1 rounded-md border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition @error('tahun_terbit') border-red-500 @enderror" placeholder="Enter publication year" required>
                @error('tahun_terbit')<p class="text-sm text-red-600">{{ $message }}</p>@enderror
            </div>

            <!-- Description Field -->
            <div>
                <label for="deskripsi" class="text-sm font-semibold text-gray-700">Description</label>
                <textarea name="deskripsi" id="deskripsi" rows="4" class="w-full px-3 py-2 mt-1 rounded-md border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition @error('deskripsi') border-red-500 @enderror" placeholder="Enter book description"></textarea>
                @error('deskripsi')<p class="text-sm text-red-600">{{ $message }}</p>@enderror
            </div>

            <!-- Action Buttons -->
            <div class="flex justify-end pt-4 border-t">
                <button type="submit" class="px-6 py-2 rounded-md bg-zinc-900 text-white hover:bg-zinc-950 focus:ring-2 focus:ring-zinc-800 focus:ring-offset-2 transition">
                    Save Book
                </button>
            </div>
        </form>
    </div>
</div>
@endsection