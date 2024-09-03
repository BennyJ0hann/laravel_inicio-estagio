<?php

use App\Http\Controllers\EventController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

Route::GET('/',[EventController::class, 'index']);
Route::GET('/events/create',[EventController::class, 'create'])->middleware('auth');
Route::GET('/events/{id}',[EventController::class, 'show']);
Route::GET('/events/edit/{id}', [EventController::class , 'edit'])->middleware('auth');
Route::GET('/events',[EventController::class,'dashboard'])->middleware('auth');

Route::POST('/events',[EventController::class, 'store']);

Route::DELETE('/events/{id}', [EventController::class, 'destroy'])->middleware('auth');

Route::PUT('/events/{id}',[EventController::class, 'update'])->middleware('auth');

Route::POST('/events/join/{id}',[EventController::class, 'joinEvent'])->middleware('auth');


Route::GET('/contacts', [EventController::class, 'contact']);



