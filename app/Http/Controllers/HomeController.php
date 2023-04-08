<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        return view('frontEnd.welcome',[
            'blogs' =>Blog::where('status',1)->get()
        ]);
    }


}
