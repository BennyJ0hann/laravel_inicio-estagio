<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

Route::GET('/',[EventController::class, 'index']);
Route::GET('/events',[EventController::class, 'create']);

Route::POST('/events',[EventController::class, 'store']);

Route::GET('/contacts', [EventController::class, 'contact']);
