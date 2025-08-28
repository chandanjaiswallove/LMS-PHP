<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageControllers;

Route::get('/', [PageControllers::class, 'home'])->name('home');
Route::get('/Contact', [PageControllers::class, 'contact'])->name('contact');
Route::get('/About-us', [PageControllers::class, 'about'])->name('about');
Route::get('/Instructors', [PageControllers::class,'instructors'])->name('instructor');
Route::get('/Gallery',[PageControllers::class,'gallery'])->name('gallery');
Route::get('/Blogs',[PageControllers::class,'blog'])->name('blog');
Route::get('/AllCourses',[PageControllers::class,'allcourse'])->name('allcourse');
