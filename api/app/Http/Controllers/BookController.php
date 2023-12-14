<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Http\Response;

class BookController extends Controller
{
    protected $book;

    public function __construct(Book $book)
    {
        $this->book = $book;
    }

    /**
     * Display a listing of the categories.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return Book::all();
    }
    /**
     * Store a newly created category in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book = $this->book->create($request->all());

        return response()->json($book, Response::HTTP_CREATED);
    }

    /**
     * Display the specified book.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($book_id)
    {

        $book = $this->book->find($book_id);

        return response()->json($book);
    }

    /**
     * Update the specified book in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $book = $this->book->find($id);

        // Get only the fields that are present in the request
        $input = $request->only([
            'title',
            'author',
            'publisher',
            'publication_year',
            'isbn',
            'language',
            'genre',
            'description',
            'price',
            'format',
            'number_of_pages',
            'image'
        ]);

        // Update the model only with the provided fields
        $book->fill($input)->save();

        return response()->json($book);
    }

    /**
     * Remove the specified book from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = $this->book->find($id);
        $book->delete();

        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
