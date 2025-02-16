<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class admin extends Controller
{
    public function user()
    {

        if (Auth::user()->role_id != 1) {
            return redirect('/books')->with('error', 'Lo Bukan Admin');
        }
        $user = User::all();
        return view('admin.user', compact('user'));
    }


    public function book()
    {
        if (Auth::user()->role_id != 1) {
            return redirect('/books')->with('error', 'Lo Bukan Admin');
        }
        $book = Book::all();
        return view('admin.book', compact('book'));
    }
}
