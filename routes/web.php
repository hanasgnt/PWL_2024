<?php

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

// membuat route ’/’ yang menampilkan pesan ‘Selamat Datang’
Route::get('/', function () {
    // return view('welcome');
    return 'Selamat datang';
});

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/world', function () {
    return 'World';
});

// buatlah route ‘/about’ yang akan menampilkan NIM dan nama Anda.
Route::get('/about', function () {
    $nama = 'Hana Sugianto';
    $nim = '2241720102';
    return "Nama : $nama <br> NIM : $nim";
});

Route::get('/user/{name}', function ($name) {
    return 'Nama saya ' . $name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-' . $postId . " Komentar ke-" . $commentId;
});

Route::get('/articles/{id}', function ($id) {
    return "Halaman Artikel dengan ID $id";
});

Route::get('/user/{name?}', function ($name = 'John') {
    return 'Nama saya ' . $name;
});

// Route Name
Route::get('/user/profile', function () {
    //
})->name('profile');

// // Route Group dan Route Prefixes
// Route::middleware(['first', 'second'])->group(function () {
//     Route::get('/', function () {
//         // Uses first & second middleware...
//     });

// Route::get('/user/profile', function () {
//     // Uses first & second middleware...
//     });
// });

// Route::domain('{account}.example.com')->group(function () {
//     Route::get('/user/{id}', function ($account, $id) {
//         // Logic untuk menampilkan profil pengguna
//     });
// });

// Route::middleware('auth')->group(function () {
//  	Route::get('/user', [UserController::class, 'index']);
//  	Route::get('/post', [PostController::class, 'index']);
//  	Route::get('/event', [EventController::class, 'index']);
// });

// Route Prefixes
// Route::prefix('admin')->group(function () {
//  	Route::get('/user', [UserController::class, 'index']);
//  	Route::get('/post', [PostController::class, 'index']);
//  	Route::get('/event', [EventController::class, 'index']);
// });

// - Redirect Routes
// Route::redirect('/here', '/there');

// - View Routes
// Route::view('/welcome', 'welcome');
// Route::view('/welcome', 'welcome', ['name' => 'Taylor']);
