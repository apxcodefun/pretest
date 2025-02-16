<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $books = Auth::user()->books;
        return view('book.index')->with('books', $books);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('book.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input termasuk gambar
        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required|numeric',
            'deskripsi' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048' // Validasi gambar
        ]);

        // Simpan gambar ke folder 'uploads' dalam 'public'
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('uploads'), $imageName);

        // Simpan data ke database
        $book = new Book();
        $book->judul = $request->judul;
        $book->penulis = $request->penulis;
        $book->penerbit = $request->penerbit;
        $book->tahun_terbit = $request->tahun_terbit;
        $book->deskripsi = $request->deskripsi;
        $book->gambar = 'uploads/' . $imageName; // Simpan path gambar
        $book->user_id = Auth::id();
        $book->save();

        return redirect()->route('books.index')->with('message', 'Buku berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $book = Book::findOrFail($id);
        return view('book.detail')->with('book', $book);
    }


    public function edit($id)
    {
        $book =  Book::findOrFail($id);
        return view('book.edit')->with('book', $book);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function update(Request $request, $id)

    {
        $book = Book::findOrFail($id);
        $book->judul = $request->judul;
        $book->penulis = $request->penulis;
        $book->penerbit = $request->penerbit;
        $book->tahun_terbit = $request->tahun_terbit;
        $book->deskripsi = $request->deskripsi;
        $book->update();

        return redirect()->route('books.index')->with('message', 'Buku berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Book::destroy($id);
        return redirect()->route('books.index');
    }
}
