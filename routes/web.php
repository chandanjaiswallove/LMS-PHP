<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageControllers;


//Pages Default Files 
Route::get('/', [PageControllers::class, 'home'])->name('home');
Route::get('/Contact', [PageControllers::class, 'contact'])->name('contact');
Route::get('/About-us', [PageControllers::class, 'about'])->name('about');
Route::get('/Instructors', [PageControllers::class, 'instructors'])->name('instructor');
Route::get('/Gallery', [PageControllers::class, 'gallery'])->name('gallery');
Route::get('/Blogs', [PageControllers::class, 'blog'])->name('blog');
Route::get('/AllCourses', [PageControllers::class, 'allcourse'])->name('allcourse');
Route::get('JoinNow', [PageControllers::class,'joinNow'])->name(('joinnow'));
Route::get('Results', [PageControllers::class,'result'])->name(('result'));
Route::get('/Events', [PageControllers::class,'event'])->name('event');
Route::get('/Developer@5vot', [PageControllers::class,'developer'])->name('developer');
Route::get('/PageNotFound', [PageControllers::class,'pageNotFound'])->name('pagenotfound');

/// Courses Tab files

Route::get('/Category1', [PageControllers::class,'coursefirst'])->name('coursefirst');
Route::get('/Category2', [PageControllers::class,'course_two'])->name('coursetwo');
Route::get('/Category3', [PageControllers::class,'course_three'])->name('coursethree');
Route::get('/Category4', [PageControllers::class,'course_four'])->name('coursefour');
Route::get('/Category5', [PageControllers::class,'course_five'])->name('coursefive');
Route::get('/Category6', [PageControllers::class,'course_six'])->name('coursesix');
Route::get('/Category7', [PageControllers::class,'course_seven'])->name('courseseven');
Route::get('/Category8', [PageControllers::class,'course_eight'])->name('courseeight');
Route::get('/Category9', [PageControllers::class,'course_nine'])->name('coursenine');

