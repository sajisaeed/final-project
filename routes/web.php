<?php
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
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
Route::get('/', [BookController::class, 'main_screen'])->name('main_screen');
Route::get('/dash', [BookController::class, 'listBooks'])->name('list-books');
Route::get('/add-book', [BookController::class, 'addBook'])->name('add-book');
Route::post('/do-add-book', [BookController::class, 'doAddBook'])->name('do-add-book');
Route::get('/view-book/{id}', [BookController::class, 'viewBook'])->name('view-book');
Route::get('/update-book/{id}', [BookController::class, 'updateBook'])->name('update-book');
Route::post('/do-update-book/{id}', [BookController::class, 'doUpdateBook'])->name('do-update-book');
Route::get('/delete-book/{id}', [BookController::class, 'deleteBook'])->name('delete-book');
Route::get('/purchase-management', [BookController::class, 'purchase_managementk'])->name('purchase-management');
Route::get('/contact-us', [BookController::class, 'contact_us'])->name('contact_us');
Route::get('/about', [BookController::class, 'about'])->name('about');
Route::get('/Purchasing-Screen', [BookController::class, 'Purchasing_Screen'])->name('Purchasing_Screen');
Route::Post('/docontact', [BookController::class, 'Add_contact'])->name('Add_contact');

Route::get('/show-masseges', [BookController::class, 'show_masseges'])->name('show-masseges');
Route::get('/show-aouther', [BookController::class, 'show_aouther'])->name('show-aouther');


Route::get('/login', [HomeController::class, 'login']);
Auth::routes();

Route::get('/home', [HomeController::class, 'index']);
Route::post('/editabout', [AboutController::class, 'store']);
Route::get('/editabout', [AboutController::class, 'showeditabout']);


