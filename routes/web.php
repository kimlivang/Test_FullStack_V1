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
            // Route::get('/', function () {
            //     return view('welcome');
            // });

            //Home Pages
            Route::get('/home', function () {   return view('pages.home');  })->name('home');
            
            // Other Pages
            Route::get('/products', function(){ return view('pages.products');  })->name('products');
            Route::get('/about', function(){ return view('pages.about');  })->name('about');
            Route::get('/contact', function(){ return view('pages.contact');  })->name('contact');
            Route::get('/categories/{category?}', function($category = null){ return view('pages.Category', ['selectedCategory' => $category]);  })->name('categories');
            Route::get('/category/{category?}', function($category = null){ return view('pages.Category', ['selectedCategory' => $category]);  })->name('category');
            

            // Route::get('/frmRegister', [RegisterController::class, 'showForm'])->name('register.submit');
            // Route::post('/register', [RegisterController::class, 'RegsFrm'])->name('register.submit');
            
            // Authentication Pages
            Route::get('/login', function () { return view('Auth.login'); })->name('login');
            Route::post('/login', function () { return redirect('/home'); });

            Route::get('/register', function () { return view('Auth.register'); })->name('register');
            Route::post('/register', function () { return redirect('/home'); })->name('register.submit');
