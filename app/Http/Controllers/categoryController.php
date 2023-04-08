<?php

namespace App\Http\Controllers;
use App\Models\Author;
use Illuminate\Http\Request;
use App\Models\Category;
class categoryController extends Controller
{
    //
    public function index(){
        return view('backEnd.dashboard.category');
    }

    public function createCategory(Request $request){
            Category::createData($request);
            return redirect('manage_category');
    }

    public function manageCategory(){
        return view('backEnd.dashboard.manage_category',[
            'categories'=>Category::all()
        ]);
    }

}
