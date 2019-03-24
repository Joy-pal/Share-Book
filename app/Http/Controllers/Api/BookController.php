<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
     public function allBooks(){
         $books = Book::orderByDesc('updated_at')->get();
         return response()->json([
             'books' =>$books
         ], 200);
     }

}
