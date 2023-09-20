<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    public static $book;

    public static function saveBooks($request){
      self::$book = new Book();
      self::$book->book_name = $request->book_name;
      self::$book->author_name = $request->author_name;
      self::$book->quantity = $request->book_quantity;
      self::$book->category_name = $request->category_name;

      $image = $request->file('image');
      $imgName = $image->getClientOriginalName();
      $folder = "public-images/";

      $image->move($folder, $imgName);
      self::$book->image = $folder.$imgName;
      self::$book->save();
    }

    public static function updateBook($request , $id){
      self::$book = Book::find($id);
      self::$book->book_name = $request->book_name;
      self::$book->author_name = $request->author_name;
      self::$book->category_name = $request->category_name;

      $image = $request->file('image');
      $imgName = $image->getClientOriginalName();
      $folder = "public-images/";

      $image->move($folder, $imgName);
      self::$book->image = $folder.$imgName;
      self::$book->save();
    }

    public static function destroyBook($id){
       self::$book = Book::find($id);
       if(file_exists(self::$book->image)){
        unlink(self::$book->image);
       }
       self::$book->delete();
       
    }
}
