<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageControllers;

Route::get('/', [PageControllers::class, 'home'])->name('home');
Route::get('/Contact', [PageControllers::class, 'contact'])->name('contact');
Route::get('/About-us', [PageControllers::class, 'about'])->name('about');
