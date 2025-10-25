<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/menu', [PageController::class, 'menu'])->name('menu');
Route::get('/menu/{id}', [PageController::class, 'showDrink'])->name('menu.show'); // trang chi tiết món
Route::get('/beans-story', [PageController::class, 'beansStory'])->name('beans');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
