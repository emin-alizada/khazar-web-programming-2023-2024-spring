<?php

use App\Http\Controllers\BasicController;
use Illuminate\Foundation\Http\Middleware\ValidateCsrfToken;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/greeting', function () {
    return 'Hello World from our super laravel app ';
});

Route::get('/greeting-json', function () {
   return  response()->json(['message' => 'Hello World from our laravel app']);
});

Route::get('/greeting-from-controller', [BasicController::class, 'hello']);

Route::post('/greeting-post', function () {
    return 'Hello World from POST Request';
})->withoutMiddleware([ValidateCsrfToken::class]);

Route::put('/greeting-put', function () {
    return 'Hello World from PUT Request';
})->withoutMiddleware([ValidateCsrfToken::class]);

Route::delete('/greeting-delete', function () {
    return 'Hello World from DELETE Request';
})->withoutMiddleware([ValidateCsrfToken::class]);


// ====================================

Route::post('/greeting', function () {
    return 'Hello World from POST Request new';
})->withoutMiddleware([ValidateCsrfToken::class]);

Route::put('/greeting', function () {
    return 'Hello World from PUT Request new';
})->withoutMiddleware([ValidateCsrfToken::class]);

Route::delete('/greeting', function () {
    return 'Hello World from DELETE Request new';
})->withoutMiddleware([ValidateCsrfToken::class]);


Route::match(['get', 'post'], '/help', function () {
    return 'Help endpoint with GET and POST methods';
})->withoutMiddleware([ValidateCsrfToken::class]);

Route::any('/any-method', function () {
    return 'Endpoint with any method';
})->withoutMiddleware([ValidateCsrfToken::class]);


// ====================================

//Route::get('/society/857724', function () {
//    return 'Society 857724';
//});
//
//Route::get('/society/857725', function () {
//    return 'Society 857725';
//});

// Route parameters

Route::get('/society/{societyId}', function ($id) {
    return 'Society '.$id;
});

Route::get('/society/${societyId}/members/{memberId}', function ($societyId, $memberId) {
    return 'Society '.$societyId.' Member '.$memberId;
});


// named routes

Route::get('/test-view', function () {
    return view('test');
});

Route::post('/team', function () {
    return 'Team created';
})->name('team.create');



// Route grouping

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return 'Admin Dashboard';
    });

    Route::get('/settings', function () {
        return 'Admin Settings';
    });
});
