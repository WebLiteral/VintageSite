<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ArtworkController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\FanartController;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



Route::view('/contact', 'contact');

Route::view('/privacy-policy', 'privacy-policy');

Route::view('/about', 'about');

Route::view('/changelog', 'changelog');


Route::get('/discography', [MusicController::class, 'index']);
Route::get('/discography/{slug}', [MusicController::class, 'show']);


Route::get('/gallery', [CollectionController::class, 'index']);
Route::get('/gallery/collection/{slug}', [CollectionController::class, 'show']);
Route::get('/gallery/artwork/{slug}', [ArtworkController::class, 'show']);

Route::get('/articles', [ArticleController::class, 'index']);
Route::get('/articles/{slug}', [ArticleController::class, 'show']);

Route::view('/sitemap', 'sitemap');