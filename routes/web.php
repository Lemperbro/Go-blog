<?php

use App\Livewire\Home\Home;
use App\Livewire\Read\Read;
use App\Livewire\Tags\Tags;
use App\Livewire\About\About;
use App\Livewire\Tags\TagList;
use App\Livewire\Article\Article;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', Home::class)->name('home');
Route::get('/articles', Article::class)->name('article');
Route::get('/tags', Tags::class)->name('tags');
Route::get('/tags/lists/{tag}', TagList::class)->name('tags.list');
Route::get('/about', About::class)->name('about');
Route::get('/read', Read::class)->name('read');
