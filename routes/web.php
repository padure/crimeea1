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
//Route::get('/cadrul-normativ', [FrontendController::class, 'law'])->name('law.index');
//Route::get('/contacte', [FrontendController::class, 'contacts'])->name('contacts.index');
//Route::post('/trimite-mesaj', [MessageController::class, 'store'])->name('contact.message');
//Route::get('/evenimente', [FrontendController::class, 'event'])->name('event.index');
//Route::get('/eveniment-by/{category}', [FrontendController::class, 'category'])->name('event.category');
//Route::get('/evenimente/{title}', [FrontendController::class, 'more'])->name('event.show');
//Route::get('/galerie', [FrontendController::class, 'galerie'])->name('galerie.index');
//Route::get('/meniu', [FrontendController::class, 'menu'])->name('menu.index');
//Route::get('/programul-zilei', [FrontendController::class, 'regime'])->name('regime.index');
//Route::get('/echipa-noastra', [FrontendController::class, 'team'])->name('team.index');
