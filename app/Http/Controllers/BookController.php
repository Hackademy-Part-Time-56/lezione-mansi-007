<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        //$books = ['Divina COmmedia', 'testo3'];
        $books = Book::all();
        $authors = Author::all();
        return view('welcome', [
            'books' => $books,
            'authors' => $authors
        ]);
        //return view('welcome', compact('books', 'authors'));
    }

    public function create()
    {
        $data = [
            'name' => 'Otello',
            'pages' => 456,
            'year' => 1985,
        ];
        Book::create([
            'name' => $data['name'],
            'pages' => $data['pages'],
            'year' => $data['year'],
        ]);

        dd('libro creato');
    }


    public function create_author()
    {

        Author::create([
            'firstname' => 'Tizio',
            'lastname' => 'Caio',
            'age' => 99,
        ]);

        dd('Creo autore');
    }
}
