<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BlogController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/read_more-blog/{slug}',[BlogController::class,'readMoreBlog'])->name('read_more.blog');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::get('/add_category',[CategoryController::class,'index'])->name('add_category');
    Route::post('/create_category',[CategoryController::class,'createCategory'])->name('create_category');
    Route::get('/manage_category',[CategoryController::class,'manageCategory'])->name('manage_category');

    Route::get('/add-author',[AuthorController::class,'addAuthor'])->name('add.author');
    Route::post('/create-author',[AuthorController::class,'createAuthor'])->name('create_author');
    Route::get('/manage-author',[AuthorController::class,'manageAuthor'])->name('manage.author');
    Route::get('/status/{id}',[AuthorController::class,'statusAuthor'])->name('status');
    Route::get('/edit-author/{id}',[AuthorController::class,'editAuthor'])->name('author.edit');
    Route::post('/update-author',[AuthorController::class,'updateAuthor'])->name('update.author');
    Route::post('/delete-author',[AuthorController::class,'deleteAuthor'])->name('delete.author');
//
//    //// blog routs////
    Route::get('/add-blog',[BlogController::class,'addBlog'])->name('add.blog');
    Route::post('/new-author',[BlogController::class,'newBlog'])->name('new.blog');
    Route::get('/manage-blog',[BlogController::class,'manageBlog'])->name('manage.blog');
    Route::get('/blog-status/{id}',[BlogController::class,'statusBlog'])->name('blog.status');


});
