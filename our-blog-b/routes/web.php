<?php

use App\Http\Controllers\BlogFullController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\BlogController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/',function (){
//    return view("blog-home");
//})->name('home');
//Route::get('/about',function (){
//    return view("about");
//})->name('about');
//Route::get('/categories',function (){
//    return view("categories");
//})->name('categories');
//
//Route::get('/blog/{id}',function ($id){
//    return view("blog", ['blogId'=>$id]);
//})->name('blog.inner');


// Explicit routing of resource

//Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
//Route::get('/blogs/create', [BlogController::class, 'create'])->name('blogs.create');
//Route::get('/blogs/{id}', [BlogController::class, 'show'])->name('blogs.show');
//Route::post('/blogs', [BlogController::class, 'store'])->name('blogs.store');
//Route::get('/blogs/{id}/edit', [BlogController::class, 'edit'])->name('blogs.edit');
//Route::put('/blogs/{id}', [BlogController::class, 'update'])->name('blogs.update');
//Route::delete('/blogs/{id}', [BlogController::class, 'destroy'])->name('blogs.destroy');

// Implicit routing of resource
Route::resource('blogs', BlogController::class);
Route::resource('blogs-v2', BlogFullController::class);
Route::resource('categories', CategoryController::class);
