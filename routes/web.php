<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MethodsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PestController;
use App\Http\Controllers\ServiceController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/test-email', [ContactController::class, 'testEmail'])->name('test.email');

Route::resource('/commercial', ServiceController::class);

// IDN Version
Route::get('/commercial', [ServiceController::class, 'commercial']);
Route::get('/residential', [ServiceController::class, 'residential']);
Route::get('/industrial', [ServiceController::class, 'industrial']);
Route::get('/disinfection', [ServiceController::class, 'disinfection']);
Route::get('/cleaning', [ServiceController::class, 'cleaning']);
Route::get('/fumigation', [MethodsController::class, 'fumigation']);
Route::get('/generalpest', [MethodsController::class, 'generalpest']);
Route::get('/termitebaiting', [MethodsController::class, 'termitebaiting']);
Route::get('/pest', [PestController::class, 'index']);
Route::get('/otherpest', [PestController::class, 'other']);
Route::get('/otherpest/{id}', [PestController::class, 'otherpest'])->name('otherpest.show');
Route::get('/pest/{id}', [PestController::class, 'show'])->name('bug.show');
Route::get('/contact_us', [ContactController::class, 'index'])->name('contact.us');
Route::post('/store', [ContactController::class, 'store'])->name('store-contact');
Route::get('/news', [NewsController::class, 'index']);
Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.show');

// ENG Version
Route::get('/eng', [HomeController::class, 'index_eng'])->name('home_eng');
Route::get('/commercial_eng', [ServiceController::class, 'commercial_eng']);
Route::get('/residential_eng', [ServiceController::class, 'residential_eng']);
Route::get('/industrial_eng', [ServiceController::class, 'industrial_eng']);
Route::get('/disinfection_eng', [ServiceController::class, 'disinfection_eng']);
Route::get('/cleaning_eng', [ServiceController::class, 'cleaning_eng']);
Route::get('/fumigation_eng', [MethodsController::class, 'fumigation_eng']);
Route::get('/generalpest_eng', [MethodsController::class, 'generalpest_eng']);
Route::get('/termitebaiting_eng', [MethodsController::class, 'termitebaiting_eng']);
Route::get('/pest_eng', [PestController::class, 'index_eng']);
Route::get('/otherpest_eng', [PestController::class, 'other_eng']);
Route::get('/otherpest_eng/{id}', [PestController::class, 'otherpest_eng'])->name('otherpest.show_eng');
Route::get('/pest_eng/{id}', [PestController::class, 'show_eng'])->name('bug.show_eng');
Route::get('/news_eng', [NewsController::class, 'index_eng']);
Route::get('/news_eng/{id}', [NewsController::class, 'show_eng'])->name('news.show_eng');
Route::get('/contact_us_eng', [ContactController::class, 'index_eng'])->name('contact.us_eng');
Route::post('/store_eng', [ContactController::class, 'store_eng'])->name('store-contact_eng');

