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
    $book->title = '';
    $table->excerpt = '';
    $table->pages = '';
    $table->isbn = '';
    $table->published = '';
    $table->added_to_library = '';
  }
  
  public function update($id) {
    $book = Book::find($id);
    $book->title = 'The book on books';
    
    $book->save();
  }
  
  public function destroy($id) {
    Book::find($id)->delete();
  }
}
