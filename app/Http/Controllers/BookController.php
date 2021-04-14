<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index() {
      return Book::all();
    }
  
  public function individualBook($id) {
    return Book::find($id);
  }
  
  public function create(Request $request) {
    $book = new Book();
    if ($request->title != null) {$book->title = $request->title;}
    if ($request->excerpt != null) {$book->excerpt = $request->excerpt;}
    if ($request->pages != null) {$book->pages = $request->pages;}
    if ($request->isbn != null) {$book->isbn = $request->isbn;}
    if ($request->published != null) {$book->published = $request->published;}
    
    $book->save();
    return $book;
  }
  
  public function update(Request $request, $id) {
    $book = Book::find($id);
    if ($request->title != null) {$book->title = $request->title;}
    if ($request->excerpt != null) {$book->excerpt = $request->excerpt;}
    if ($request->pages != null) {$book->pages = $request->pages;}
    if ($request->isbn != null) {$book->isbn = $request->isbn;}
    if ($request->published != null) {$book->published = $request->published;}

    $book->save();
    return $book;
  }
  
  public function delete($id) {
    Book::find($id)->delete();
  }
}
