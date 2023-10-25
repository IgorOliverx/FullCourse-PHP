<?php

namespace App\Http\Controllers;

use App\Models\Book;
use http\Message;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Book::select('id','name','price', 'description')->get();
    }


    public function create()
    {

    }

    public function store(Request $request)
    {
        $request->validate([
           'name' => 'required',
           'price' => 'required',
           'description' => 'required',
        ]);

        Book::created($request->post()); //SE NAO FOR CREATED É CREATE COMO NO VIDEOOO
        return response()->json([
           'message' => 'new item add com sucesso'
        ]);
    }


    public function show(Book $book)
    {
        return response()->json([
            'book' => $book
        ]);
    }




    public function update(Request $request, Book $book)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);
        $book->fill($request->post())->update();
       // Book::created($request->post()); //SE NAO FOR CREATED É CREATE COMO NO VIDEOOO
        return response()->json([
            'message' => 'new item uptdated com sucesso'
        ]);
    }


    public function destroy(Book $book)
    {
        $book->delete();
        return response()->json([
           'message'=>'this item deleted successfully!'
        ]);
    }
}
