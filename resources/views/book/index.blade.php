@extends('book')

@section('content')
<div class="w-full">
    <!-- Header Section -->

    @if(session('error'))
    <div class="bg-red-500 text-white p-3 rounded mb-4">
        {{session('error')}}
    </div>
    @endif


    @if(Auth::check())
    <div class="flex items-center justify-end gap-4 mb-4">
        <span class="text-sm font-semibold text-gray-800">{{ Auth::user()->email }}</span>
    </div>
    @endif

    <div class="flex flex-col md:flex-row justify-between items-center mb-6 gap-4">
        <h2 class="text-2xl font-semibold text-gray-800">Daftar Buku</h2>
        <a href="{{ route('books.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition w-full md:w-auto text-center">
            Tambah Buku Baru
        </a>
    </div>

    @if ($books->isEmpty())
    <p class="text-gray-500 text-center py-6">Anda belum memasukkan buku.</p>
    @else
    <!-- Section Buku -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($books as $book)
        <div class="bg-zinc-800 text-white shadow-md rounded-lg p-4 flex flex-col">
            <!-- Bagian atas -->
            <div class="flex-grow">
                <h3 class="text-lg font-semibold">{{ $book->judul }}</h3>
                <p class="text-sm ">Penulis: {{ $book->penulis }}</p>
                <p class="text-sm ">Penerbit: {{ $book->penerbit }}</p>
                <p class="text-sm ">Tahun Terbit: {{ $book->tahun_terbit }}</p>
            </div>

            <!-- Tombol Aksi -->
            <div class="mt-4 flex flex-wrap justify-between gap-2">
                <a href="{{ route('books.show', $book->id) }}" class="bg-zinc-700 hover:bg-zinc-800 text-white px-4 py-2 rounded-md text-sm w-full sm:w-auto text-center">
                    Details
                </a>
                <a href="{{ route('books.edit', $book->id) }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md text-sm w-full sm:w-auto text-center">
                    Edit
                </a>
                <form action="{{ route('books.destroy', $book->id) }}" method="POST" class="w-full sm:w-auto">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-md text-sm w-full sm:w-auto"
                        onclick="return confirm('Are you sure you want to delete this book?')">
                        Delete
                    </button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
    @endif
</div>
@endsection