<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
Route::get('/contact',[ContactController::class,'index'])->name("contact.index");
Route::post('/contact',[ContactController::class,'store'])->name("contact.store");
