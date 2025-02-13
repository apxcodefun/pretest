@extends('book')

@section('content')
<div class="w-full max-w-3xl mx-auto">
    <!-- Header Section -->
    <div class="bg-white p-6 rounded-t-xl shadow-sm mb-6 flex justify-between items-center">
        <div>
            <h2 class="text-2xl font-bold text-gray-800">Tambah Buku Baru</h2>
            <p class="text-gray-500 mt-1">Form Tambah Buku</p>
        </div>
        <a href="{{ route('books.index') }}" class="flex items-center text-gray-600 hover:text-blue-500 transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
            </svg>
            <span class="ml-2">Daftar Buku</span>
        </a>
    </div>

    <!-- Form -->
    <div class="bg-gray-800 text-white rounded-xl shadow-lg p-6">
        <form action="{{ route('books.store') }}" method="POST" class="space-y-4">
            @csrf
            <input type="hidden" name="user_id" value="{{ auth()->id() }}">

            <div>
                <label for="judul" class="text-sm font-semibold text-gray-300">Judul Buku</label>
                <input type="text" name="judul" id="judul" class="w-full px-3 py-2 mt-1 rounded-md border border-gray-600 bg-gray-700 text-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition" placeholder="Sikancil Anak Nakal" required>
            </div>

            <div>
                <label for="penulis" class="text-sm font-semibold text-gray-300">Penulis Buku</label>
                <input type="text" name="penulis" id="penulis" class="w-full px-3 py-2 mt-1 rounded-md border border-gray-600 bg-gray-700 text-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition" placeholder="Nama Penulis Bukunya" required>
            </div>

            <div>
                <label for="penerbit" class="text-sm font-semibold text-gray-300">Penerbit Buku</label>
                <input type="text" name="penerbit" id="penerbit" class="w-full px-3 py-2 mt-1 rounded-md border border-gray-600 bg-gray-700 text-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition" placeholder="PT Erlangga Jatuh" required>
            </div>

            <div>
                <label for="tahun_terbit" class="text-sm font-semibold text-gray-300">Tahun Terbit</label>
                <input type="number" name="tahun_terbit" id="tahun_terbit" min="1998" max="{{ date('Y') }}" class="w-full px-3 py-2 mt-1 rounded-md border border-gray-600 bg-gray-700 text-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition" placeholder="Tahun Terbit Min 1998" required>
            </div>

            <div>
                <label for="deskripsi" class="text-sm font-semibold text-gray-300">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" rows="4" class="w-full px-3 py-2 mt-1 rounded-md border border-gray-600 bg-gray-700 text-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition" placeholder="Deskripsi Bukunya"></textarea>
            </div>

            <!-- Action Buttons -->
            <div class="flex justify-end pt-4 border-t border-gray-600 gap-2">
                <button type="reset" class="bg-gray-600 text-white px-4 py-2 rounded-md hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">
                    Reset
                </button>
                <button type="submit" class="px-6 py-2 rounded-md bg-blue-500 text-white hover:bg-blue-600 focus:ring-2 focus:ring-blue-400 focus:ring-offset-2 transition">
                    Simpan Buku
                </button>
            </div>
        </form>
    </div>

</div>
@endsection