<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    //
    public function addAuthor(){
        return view('backEnd.dashboard.author.add-author');
    }

    public function createAuthor(Request $request){
        Author::createAuthor($request);
        return back();
    }
    public function manageAuthor(){
        return view('backEnd.dashboard.author.manage-author',[
            'authors' => Author::all()
        ]);
    }

    public function statusAuthor($id){
        Author::statusAuthor($id);
        return back();
    }

    public function editAuthor($id){
        return view('backEnd.dashboard.author.edit-author',[
            'author'=> Author::find($id)
        ]);
    }

    public  function updateAuthor(Request $request){
        Author::createAuthor($request);
        return back();
    }
    public function deleteAuthor(Request $request){
        Author::deleteUser($request);
        return back();
    }
}
