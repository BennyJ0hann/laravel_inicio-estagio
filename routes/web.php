<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

Route::GET('/',[EventController::class, 'index']);
Route::GET('/events',[EventController::class, 'create']);
Route::GET('/events/{id}',[EventController::class, 'show']);

Route::POST('/events',[EventController::class, 'store']);

Route::GET('/contacts', [EventController::class, 'contact']);

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
