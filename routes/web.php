<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetHomeController;




// Registration and authentication...
use App\Http\Controllers\Auth\AuthController;

Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');




Route::get('/dashboard', function () {
    return 'Welcome to your dashboard!';
})->middleware('auth')->name('dashboard');



// Display the upload form
Route::get('/pets/create', [PetHomeController::class, 'create'])->name('pets.create');

// Handle image upload
Route::post('/pets/image', [PetHomeController::class, 'storeImage'])->name('pets.storeImage');

// Handle file upload
Route::post('/pets/file', [PetHomeController::class, 'storeFile'])->name('pets.storeFile');

// Handle description upload
Route::post('/pets/description', [PetHomeController::class, 'storeDescription'])->name('pets.storeDescription');

// Forum page
Route::get('/forum', [PetHomeController::class, 'forum'])->name('forum');

// Home page
Route::get('/home', [PetHomeController::class, 'home'])->name('home');

// Cats page
Route::get('/cats', [PetHomeController::class, 'cats'])->name('cats');

// Dogs page
Route::get('/dogs', [PetHomeController::class, 'dogs'])->name('dogs');

// Welcome page (default route)
Route::get('/', function () {
    return view('welcome');
});
