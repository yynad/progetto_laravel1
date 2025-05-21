<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Platform;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreBookRequest;

class PublicController extends Controller
{
    public function __construct()
    {
        // Applica il middleware 'auth' su tutte le azioni eccetto 'homepage' e 'index'
        $this->middleware('auth')->except(['homepage', 'index']);
    }

    public function homepage()
    {
        return view('welcome');
    }

    public function create()
    {
        $platforms = Platform::all();
        return view('book.create', compact('platforms'));
    }

    public function store(StoreBookRequest $request)
    {
        $book = Book::create([
            'title' => $request->title,
            'genre' => $request->genre,
            'cover' => $request->has('cover') ? $request->file('cover')->store('book.cover', 'public') : 'default/default-image.jpg',
            'plot' => $request->plot,
            'user_id' => Auth::user()->id
        ]);
        $book->platforms()->attach($request->platforms);
        return redirect(route('homepage'))->with('message', 'libro inserito con successo');
    }

    public function index()
    {
        $books = Book::all();
        return view('book.index', ['books' => $books]);
    }

    public function show(Book $book)
    {
        return view('book.show', ['book' => $book]);
    }

    public function edit(Book $book)
    {
        if (Auth::user() && Auth::user()->id == $book->user_id) {
            $platforms = Platform::all();
            return view('book.edit', ['book' => $book, 'platforms' => $platforms]);
        }
        return redirect(route('homepage'))->with('denied', 'Non puoi modificare questo libro');
    }

    public function update(Book $book, StoreBookRequest $request)
    {
        if (Auth::user() && Auth::user()->id == $book->user_id) {
            $book->update([
                'title' => $request->title,
                'genre' => $request->genre,
                'plot' => $request->plot,
                'cover' => $request->has('cover') ? $request->file('cover')->store('book-cover', 'public') : $book->cover
            ]);
            $book->platforms()->detach();
            $book->platforms()->attach($request->platforms);
            return redirect(route('book.index'))->with('message', 'Libro aggiornato con successo');
        }
        return redirect(route('homepage'))->with('denied', 'Non puoi modificare questo libro');
    }

    public function delete(Book $book)
    {
        if (Auth::user() && Auth::user()->id == $book->user_id) {
            $book->platforms()->detach();
            $book->delete();

            return redirect(route('book.index'))->with('message', 'Libro eliminato con successo');
        }
        return redirect(route('homepage'))->with('denied', 'Non puoi eliminare questo libro');
    }

    public function dashboard()
    {
        return view('auth.dashboard');
    }
}