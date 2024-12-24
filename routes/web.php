<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/signin', function () {
    return view('auth.signin');
})->name('signin');

Route::get('/join', function () {
    return view('auth.join');
})->name('join');

Route::post('/login', [LoginController::class, 'authenticate'])->name('login.process');
Route::post('/register', [RegisterController::class, 'store'])->name('register.process');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.post');
Route::get('/profile', [ProfileController::class, 'show'])->middleware('auth')->name('profile');



// Halaman utama (index.html)
Route::get('/', function () {
    return view('index');
})->name('home');

// Halaman about.html
Route::get('/about', function () {
    return view('about');
})->name('about');

// Halaman badminton.html
Route::get('/badminton', function () {
    return view('badminton');
})->name('badminton');

// Halaman commite.html
Route::get('/commite', function () {
    return view('commite');
})->name('commite');

// Halaman contact.html
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Halaman ibadah-minggu.html
Route::get('/ibadah-minggu', function () {
    return view('ibadah-minggu');
})->name('ibadah-minggu');

// Halaman join.html
Route::get('/join', function () {
    return view('join');
})->name('join');

// Halaman kebaktian-padang.html
Route::get('/kebaktian-padang', function () {
    return view('kebaktian-padang');
})->name('kebaktian-padang');

// Halaman latihan-paduan-suara.html
Route::get('/latihan-paduan-suara', function () {
    return view('latihan-paduan-suara');
})->name('latihan-paduan-suara');

// Halaman perayaan-natal.html
Route::get('/perayaan-natal', function () {
    return view('perayaan-natal');
})->name('perayaan-natal');

// Halaman retreat.html
Route::get('/retreat', function () {
    return view('retreat');
})->name('retreat');

