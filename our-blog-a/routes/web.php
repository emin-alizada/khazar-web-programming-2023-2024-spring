<?php

use App\Http\Controllers\BasicController;
use Illuminate\Foundation\Http\Middleware\ValidateCsrfToken;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/greeting', function () {
    return 'Hello World Aqil';
});


Route::get('/greeting-json', function () {
    return response()->json(['message' => 'This is a json response']);
});

Route::get('/greeting-from-controller', [BasicController::class, 'greeting']);


//HTTP methods

Route::post('/greeting-post', function () {
    return 'Hello World POST Request!';
})->withoutMiddleware([ValidateCsrfToken::class]);

Route::put('/greeting-put', function () {
    return 'Hello World PUT Request!';
})->withoutMiddleware([ValidateCsrfToken::class]);

Route::delete('/greeting-delete', function () {
    return 'Hello World DELETE Request!';
})->withoutMiddleware([ValidateCsrfToken::class]);


// ====================================

Route::get('/test', function () {
    return view('test');
});

Route::post('/greeting', function () {
    return 'Hello World POST Request!';
})->withoutMiddleware([ValidateCsrfToken::class])->name('greeting.post');

Route::put('/greeting', function () {
    return 'Hello World PUT Request!';
})->withoutMiddleware([ValidateCsrfToken::class])->name('greeting.put');

Route::delete('/greeting', function () {
    return 'Hello World DELETE Request!';
})->withoutMiddleware([ValidateCsrfToken::class])->name('greeting.delete');


// ====================================


//Route::get('/politics/1234', function () {
//    return 'Politics 1234';
//});

Route::get('/politics/{id}', function ($id) {
    return 'Politics '.$id;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Post '.$postId.' Comment '.$commentId;
});

// ====================================


Route::get('/blogs', function () {
    return 'All blogs';
});

Route::get('/blogs/{id}', function ($id) {
    return 'Blog '.$id;
});

Route::delete('/blogs/{id}', function ($id) {
    return 'Blog '.$id.' Deleted';
});

Route::put('/blogs/{id}', function ($id) {
    return 'Blog '.$id.' Updated';
});
