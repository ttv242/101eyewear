<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PagesController::class, 'index'])->name('index');
Route::get('/gioi-thieu', [PagesController::class, 'blog'])->name('blog');
Route::get('/danh-muc', [PagesController::class, 'category'])->name('category');
Route::get('/lien-he', [PagesController::class, 'contact'])->name('contact');
Route::get('/elements-page', [PagesController::class, 'elements'])->name('elements');
Route::get('/archive-page', [PagesController::class, 'archive'])->name('archive');
