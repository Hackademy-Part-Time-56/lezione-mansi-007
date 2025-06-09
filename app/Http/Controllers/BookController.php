<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
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

    public function create() //GET
    {
        return view('create');
    }


    public function store(StoreBookRequest $request) //POST
    {
        $path_image = '';
        if ($request->hasFile('image')) {
            $file_name = $request->file('image')->getClientOriginalName();
            $path_image = $request->file('image')->storeAs('covers', $file_name, 'public');
            //oppure piu semplicemente
            //$path_image = $request->file('image')->store('covers', 'public');
        }

        Book::create([
            'name' => $request->name,
            'pages' => $request->pages,
            'year' =>  $request->year,
            'image' =>  $path_image
        ]);
        return redirect()->route('index');
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
