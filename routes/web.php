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


// Routes for artworks only (NOT collections)
Route::get('/artworks', [ArtworkController::class, 'landing'])->name('artworks.landing');
Route::get('/artworks/all', [ArtworkController::class, 'index'])->name('artworks.index');
Route::get('/artworks/{slug}', [ArtworkController::class, 'show'])->name('artworks.show');
Route::get('/artworks/{slug}/navigate/{action}', [ArtworkController::class, 'navigate'])->name('artworks.navigate');



Route::get('/artworks/collections/all', [CollectionController::class, 'index'])->name('collections.index');
Route::get('/artworks/collections/{slug}', [CollectionController::class, 'show'])->name('collections.show');



Route::get('/discography', [MusicController::class, 'index']);
Route::get('/discography/{slug}', [MusicController::class, 'show']);


Route::get('/gallery', [CollectionController::class, 'index']);


Route::get('/articles', [ArticleController::class, 'index']);
Route::get('/articles/{slug}', [ArticleController::class, 'show']);

Route::view('/sitemap', 'sitemap');