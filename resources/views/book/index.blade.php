@extends('book')

@section('content')
<div class="w-full">
    <!-- Header Section -->
    @if(Auth::check())
    <div class="flex items-center justify-end gap-4">
        <div class="flex items-center gap-2">
            <span class="text-sm font-semibold text-gray-800">{{ Auth::user()->email }}</span>
        </div>
    </div>
    @endif
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-semibold text-gray-800">Judul Buku</h2>
        <a href="{{route('books.create')}}" class="bg-blue-500 hover:bg-blue-600 text-black px-4 py-2 rounded-lg transition mt-2">
            Tambah Buku Baru
        </a>
    </div>

    @if ($books->isEmpty())
    <p class="text-gray-500 text-center py-6">Anda belum memasukkan buku.</p>
    @else
    <!-- Table Section -->
    <div class="overflow-x-auto rounded-lg border border-gray-200">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Judul</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Penulis</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Penerbit</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tahun Terbit</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Detail</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($books as $key => $book)
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        {{$key + 1}}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                        {{$book->judul}}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        {{$book->penulis}}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        {{$book->penerbit}}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        {{$book->tahun_terbit}}
                    </td>
                    <td class="px-6 my-2 py-4 whitespace-nowrap text-sm">
                        <a href="{{route('books.show',$book->id)}}" class=" text-white hover:cursor-pointer bg-zinc-700 rounded-md py-2 px-5">Details Buku</a>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium space-x-2">
                        <a href="{{route('books.edit', $book->id)}}"
                            class="text-blue-600 hover:text-blue-900">Edit</a>
                        <form action="{{route('books.destroy', $book->id)}}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="text-red-600 hover:text-red-900"
                                onclick="return confirm('Are you sure you want to delete this book?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif
</div>
@endsection