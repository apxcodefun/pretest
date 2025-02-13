@extends('book')

@section('content')
<div class="w-full max-w-2xl mx-auto">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-semibold text-gray-800">Details Buku</h2>
        <a href="{{route('books.index')}}" class="text-gray-600 hover:text-blue-500 transition">
            ← Daftar Buku
        </a>
    </div>

    <div class="bg-gray-800 text-white rounded-xl shadow-lg p-6">
        <div>
            <label for="judul" class="text-sm font-semibold text-gray-300">Judul Buku</label>
            <input type="text" name="judul" id="judul" class="w-full px-3 py-2 mt-1 rounded-md border border-gray-600 bg-gray-700 text-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition" placeholder="Sikancil Anak Nakal" required value="{{$book->judul}}" disabled>
        </div>

        <div>
            <label for="penulis" class="text-sm font-semibold text-gray-300">Penulis Buku</label>
            <input type="text" name="penulis" id="penulis" class="w-full px-3 py-2 mt-1 rounded-md border border-gray-600 bg-gray-700 text-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition" placeholder="Nama Penulis Bukunya" required value="{{$book->penulis}}" disabled>
        </div>

        <div>
            <label for="penerbit" class="text-sm font-semibold text-gray-300">Penerbit Buku</label>
            <input type="text" name="penerbit" id="penerbit" class="w-full px-3 py-2 mt-1 rounded-md border border-gray-600 bg-gray-700 text-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition" placeholder="PT Erlangga Jatuh" required value="{{$book->penerbit}}" disabled>
        </div>

        <div>
            <label for="tahun_terbit" class="text-sm font-semibold text-gray-300">Tahun Terbit</label>
            <input type="number" name="tahun_terbit" id="tahun_terbit" min="1998" max="{{ date('Y') }}" class="w-full px-3 py-2 mt-1 rounded-md border border-gray-600 bg-gray-700 text-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition" placeholder="Tahun Terbit Min 1998" required value="{{$book->tahun_terbit}}" disabled>
        </div>

        <div>
            <label for="deskripsi" class="text-sm font-semibold text-gray-300">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" rows="4" class="w-full px-3 py-2 mt-1 rounded-md border border-gray-600 bg-gray-700 text-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition" placeholder="Deskripsi Bukunya" disabled>{{$book->judul}}</textarea>
        </div>

    </div>


</div>
@endsection