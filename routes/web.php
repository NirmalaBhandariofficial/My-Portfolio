<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoutingController;

Route::group(['prefix' => '/'], function () {
    Route::get('', [RoutingController::class, 'index'])->name('root');
    Route::get('{any}', [RoutingController::class, 'root'])->name('any');
});

Route::get('/single-blog', function () {
    return view('single-blog');
})->name('single.blog');