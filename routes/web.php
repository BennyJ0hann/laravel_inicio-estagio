<?php

use App\Http\Controllers\EventController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

#Views
Route::GET('/',[EventController::class, 'index'])->name('home');
Route::GET('/events',[EventController::class, 'create'])->name('events.create')->middleware('auth');
Route::GET('/events/table',[EventController::class,'dashboard'])->name('events.table')->middleware('auth');

#Routes
Route::GET('/events/{id}',[EventController::class, 'show'])->name('events.info');
Route::GET('/events/{id}/details', [EventController::class , 'edit'])->name('events.details')->middleware('auth');

Route::POST('/events',[EventController::class, 'store'])->name('events.store');
Route::POST('/events/entry/{id}',[EventController::class, 'joinEvent'])->name('events.entry')->middleware('auth');

Route::DELETE('/events/{id}', [EventController::class, 'destroy'])->name('events.destroy')->middleware('auth');
Route::DELETE('/events/{id}/out', [EventController::class, 'leaveEvent'])->name('events.leave')->middleware('auth');

Route::PUT('/events/{id}',[EventController::class, 'update'])->name('events.update')->middleware('auth');







