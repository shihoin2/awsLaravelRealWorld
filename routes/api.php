<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RealWorldController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(RealWorldController::class)
->name('realWorld')
->group(function () {
    // Route::get('articles', 'getAllArticles')->name('getAllArticles');
    Route::post('articles', 'articles')->name('articles');
    Route::get('articles', 'getAllArticles')->name('getAllArticles');
    Route::get('articles/{id}', 'getArticles')->name('getArticles');
    // Route::get('articles/{id:slug}', 'getArticles')->name('getArticles');
    Route::put('articles/{id}', 'editArticles')->name('editArticles');

    // Route::put('articles/{id}', 'editArticles')->name('editArticles');
    Route::delete('articles/{id}', 'deleteArticles')->name('deleteArticles');
    Route::post('users', 'addUsers')->name('addUsers');
});
