<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Author extends Model
{
    use HasFactory;
    private static $author,$status,$image,$imageNewName,$directory,$imgUrl;
    public static function createAuthor($request){
        if($request->id){
            self::$author = Author::find($request->id);
        }else{
            self::$author = new Author();
        }
         self::$author->author_name = $request->author_name;
         self::$author->image = self::saveImage($request);
         self::$author->save();
    }

    public static function saveImage($request){
        self::$image = $request->file('image');
        self::$imageNewName = rand().'.'.self::$image->Extension();
        self::$directory = "backEndAsset/image/author_image/";
        self::$imgUrl = self::$directory.self::$imageNewName;
        self::$image->move(self::$directory,self::$imageNewName);
        return self::$imgUrl;
    }

    public static function statusAuthor($id){
       self::$status = Author::find($id);
       if(self::$status->status == 1){
           self::$status->status = 0;
       }else{
           self::$status->status = 1;
       }
        self::$status->save();
    }
    private static $deleteAuthor;
    public static function deleteUser($request){
        self::$deleteAuthor = Author::find($request->id);
        self::$deleteAuthor->delete();
    }

}
