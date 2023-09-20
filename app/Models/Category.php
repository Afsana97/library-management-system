<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public static $category;

    public static function saveCategory($request){
      self::$category = new Category();
      self::$category->name = $request->name;
      self::$category->save();
    } 
    public static function updateCategory($request,$id){
      self::$category = Category::find($id);
      self::$category->name = $request->name;
      self::$category->save();
    }
    public static function destroyCategory($id){
      self::$category = Category::find($id);
      self::$category->delete();
    }
}
