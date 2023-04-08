<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    private static $category,$image,$imageNewName,$directory,$imgUrl;
    public static function createData($request){
        self::$category =  new Category();
        self::$category['name'] = $request['name'];
        self::$category['image'] = self::saveImage($request);
        self::$category->save();
    }


    public static function saveImage($request){
        self::$image = $request->file('image');
        self::$imageNewName = rand().'.'.self::$image->getClientOriginalExtension();
        self::$directory = "backEndAsset/category_image/";
        self::$imgUrl =  self::$directory.self::$imageNewName ;
        self::$image->move(self::$directory, self::$imageNewName);
        return self::$imgUrl;
    }
}
