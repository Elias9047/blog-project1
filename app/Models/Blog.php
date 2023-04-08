<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    private static $blog,$status,$image,$imageNewName,$directory,$imgUrl;
    public static function newBlog($request){
        if($request->id){
            self::$blog = Author::find($request->id);
        }else{
            self::$blog = new Blog();
        }
        self::$blog->title = $request->title;
        self::$blog->author_name = $request->author_name;
        self::$blog->category = $request->category;
        self::$blog->slug = str_slug($request->slug);
        // str_slug ei function er sate (composer require laravel helpers) ei command chalate hoy
        self::$blog->description = $request->description;
        self::$blog->description = $request->description;
        self::$blog->image = self::saveImage($request);
        self::$blog->save();
    }

    public static function saveImage($request){
        self::$image = $request->file('image');
        self::$imageNewName = rand().'.'.self::$image->Extension();
        self::$directory = "backEndAsset/image/author_image/";
        self::$imgUrl = self::$directory.self::$imageNewName;
        self::$image->move(self::$directory,self::$imageNewName);
        return self::$imgUrl;
    }
    public function author_relation(){
        return $this->belongsTo(Author::class,'author_name');
    }

    public function category_relation(){
        return $this->belongsTo(Category::class,'category');
    }
    public static function statusBlog($id){
        self::$status = Blog::find($id);
        if(self::$status->status == 1){
            self::$status->status = 0;
        }else{
            self::$status->status = 1;
        }
        self::$status->save();
    }
    }

