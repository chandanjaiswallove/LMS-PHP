<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageControllers;

Route::get('/', [PageControllers::class, 'welcome'])->name('home');
