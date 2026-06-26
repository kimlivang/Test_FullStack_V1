<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

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

            Route::get('/', function () {
                return view('welcome');
            });

            // ទំព័រ Home (/home)
            Route::get('/home', function () {
                return view('pages.home');
            });

            // ទំព័រ Product (/product)
            Route::get('/product', function () {
                return view('pages.product');
            });

            // ទំព័រ About (/about)
            Route::get('/about', function () {
                return view('pages.about');
            });

            // ទំព័រ Contact (/contact)
            Route::get('/contact', function () {
                return view('pages.contact');
            });

            // Route::get('/frmRegister', [RegisterController::class, 'showForm'])->name('register.submit');
            // Route::post('/register', [RegisterController::class, 'RegsFrm'])->name('register.submit');