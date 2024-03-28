<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PhotoController;
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
// Route::get('/', function () {
//     // return view('welcome');
//     return 'Selamat datang';
// });

Route::get('/', function () {
    return view('welcome');
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

// Route Group dan Route Prefixes
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

// Route Controller
Route::get('/helloController', [WelcomeController::class, 'helloController']);

// f. Modifikasi hasil pada praktikum poin 2 (Routing) dengan konsep controller.Pindahkan logika eksekusi ke dalam controller dengan nama PageController.
// Route::get('/indexController', [PageController::class, 'indexController']);
// Route::get('/aboutController', [PageController::class, 'aboutController']);
// Route::get('/articlesController/{id}', [PageController::class, 'articlesController']);

// g. Modifikasi kembali implementasi sebelumnya dengan konsep Single Action Controller. Modifikasi juga route yang digunakan
Route::get('/homeController', [HomeController::class, 'homeController']);
Route::get('/aboutController', [AboutController::class, 'aboutController']);
Route::get('/articlesController/{id}', [ArticleController::class, 'articleController']);

// Resource Controller
Route::resource('photos', PhotoController::class);

// Jika tidak semua route pada resource controller dibutuhkan dapat dikurangi dengan
// mengupdate route pada web.php menjadi seperti berikut ini.
// Route::resource('photos', PhotoController::class)->only([
//     'index', 'show'
// ]);

// Route::resource('photos', PhotoController::class)->except([
//     'create', 'store', 'update', 'destroy' ]);

// VIEW
// Route::get('/greeting', function () {
//     return view('hello', ['name' => 'Hana']);
// });

//perubahan route
// Route::get('/greeting', function () {
//     return view('blog.hello', ['name' => 'Hana']);
// });

// b.	Ubah route /greeting dan arahkan ke WelcomeController pada fungsi greeting.
Route::get('/greeting', [WelcomeController::class, 'greetingController']);
// Route::get('/user/create', [UserController::class, 'index']);
// Route::get('/level/create', [UserController::class, 'index']);
