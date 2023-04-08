<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    private static $status;
    public function addBlog(){
        return view('backEnd.dashboard.blog.add-blog',[
            'authors' => Author::where('status',1)->orderBy('created_at','desc')->take(5)->get(),
            'categories'=>Category::where('status',1)->orderBy('created_at','desc')->take(5)->get()
        ]);
    }
    public function newBlog(Request $request){
        Blog::newBlog($request);
        return back();
    }

    public function manageBlog(){
            $blogs = Blog::all();
         return view('backEnd.dashboard.blog.manage-blog',[
             'blogs' => $blogs
         ]);
    }

    public static function statusBlog($id){
       Blog::statusBlog($id);
       return back();
    }

    public static function readMoreBlog($slug){
        return view('frontEnd.read_more_single_one',[
            'blogs' => Blog::where('slug',$slug)->first()
        ]);
    }
}
