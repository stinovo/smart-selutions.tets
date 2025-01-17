<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route voor de homepage
Route::get('/', [PagesController::class, 'home'])->name('home');

// Route voor de Over Ons pagina
Route::get('/about', [PagesController::class, 'about'])->name('about');

// Route voor de Contactpagina
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
