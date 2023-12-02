<?php
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Frontend\HomeController;
use \App\Http\Controllers\Frontend\AboutController;
use \App\Http\Controllers\Frontend\ServiceController;
use \App\Http\Controllers\Frontend\PriceController;
use \App\Http\Controllers\Frontend\GalleryController;
use \App\Http\Controllers\Frontend\ContactController;
//Frontend
Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/despre-noi', [AboutController::class, 'index'])->name('about.index');
Route::get('/servicii', [ServiceController::class, 'index'])->name('service.index');
Route::get('/preturi', [PriceController::class, 'index'])->name('prices.index');
Route::get('/galeire', [GalleryController::class, 'index'])->name('gallery.index');
Route::get('/contacte', [ContactController::class, 'index'])->name('contacts.index');
