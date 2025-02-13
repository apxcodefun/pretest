@extends('book')

@section('content')
<div class="w-full max-w-2xl mx-auto">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-semibold text-gray-800">Details Of Book</h2>
        <a href="/books" class="text-gray-600 hover:text-blue-500 transition">
            ← Back to List
        </a>
    </div>

    @if ($errors->any())
    <div class="bg-red-50 border-l-4 border-red-500 p-4 mb-6">
        <div class="flex">
            <div class="flex-shrink-0">
                <!-- Error Icon -->
                <svg class="h-5 w-5 text-red-400" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                </svg>
            </div>
            <div class="ml-3">
                <h3 class="text-sm font-medium text-red-800">
                    There were {{ $errors->count() }} errors with your submission
                </h3>
                <div class="mt-2 text-sm text-red-700">
                    <ul class="list-disc pl-5 space-y-1">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @endif

    <form action="{{route('books.update', $book->id)}}" method="POST" class="bg-white shadow-md rounded-lg p-6">
        @csrf
        @method('PUT')
        <div class="space-y-6">
            <!-- Title Field -->
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">
                    Judul Buku
                </label>
                <input type="text"
                    name="judul"
                    id="judul"
                    value="{{ $book->judul }}"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" disabled>
            </div>

            <!-- Author Field -->
            <div>
                <label for="author" class="block text-sm font-medium text-gray-700">
                    penulis
                </label>
                <input type="text"
                    name="penulis"
                    id="penulis"
                    value="{{ $book->penulis }}"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                    disabled>
            </div>

            <!-- Publisher Field -->
            <div>
                <label for="publisher" class="block text-sm font-medium text-gray-700">
                    penerbit
                </label>
                <input type="text"
                    name="penerbit"
                    id="penerbit"
                    value="{{ $book->penerbit }}"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" disabled>
            </div>

            <!-- Year Field -->
            <div>
                <label for="year" class="block text-sm font-medium text-gray-700">
                    Tahun Terbit
                </label>
                <input type="number"
                    name="tahun_terbit"
                    id="tahun_terbit"
                    value="{{ $book->tahun_terbit }}"
                    min="1900"
                    max="{{ date('Y') }}"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" disabled>
            </div>

            <!--Deskripsi Field -->
            <div>
                <label for="description" class="block text-sm font-medium text-gray-700">
                    Deskripsi
                </label>
                <textarea name="deskripsi"
                    id="deskripsi"
                    rows="4"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" disabled>{{$book->deskripsi }}</textarea>
            </div>
        </div>
    </form>
</div>
@endsection