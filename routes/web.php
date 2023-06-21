<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\ContactController;





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
// Route::get('login', function () {
//     return view('login');
// })->name('login');

// Route::get('home', function () {
//     return view('home');
// });

Route::get('login', function () {
    return view('login');
});

// Route::get('template', function () {
//     return view('template');
// });

Route::get('contact',function() {
    return view('contact');
});

Route::get('home',[HomeController::class, 'show']);


Route::get('auth', [UserController::class, 'auth']);
Route::get('register', [UserController::class, 'register']);
route::post('register/create',[UserController::class, 'create']);
route::post('logout',[UserController::class, 'logout']);

Route::get('template',[UserController::class, 'show']);
//Route::get('template',[templateController::class, 'show']);
route::get('template',[UserController::class, 'template']);


// Route::middleware(['auth', 'second'])->group(function () {
Route::get('profil',[ProfilController::class, 'show']);
Route::post('profil/create',[ProfilController::class, 'create']);
Route::get('profil/add',[ProfilController::class, 'add']);
Route::get('profil/hapus/{nis}',[ProfilController::class, 'hapus']);
Route::get('profil/edit/{nis}',[ProfilController::class, 'edit']);
Route::post('profil/update/{nis}',[ProfilController::class, 'update']);


Route::get('portofolio',[PortofolioController::class, 'show']);
Route::get('portofolio/add',[PortofolioController::class, 'add']);
Route::post('portofolio/create',[PortofolioController::class, 'create']);
Route::get('portofolio/hapus/{id}',[PortofolioController::class, 'hapus']);
Route::get('portofolio/edit/{id}',[PortofolioController::class, 'edit']);
Route::post('portofolio/update/{id}',[PortofolioController::class, 'update']);


Route::get('contact',[PortofolioController::class, '']);
Route::post('tabel',[PortofolioController::class, 'view']);
Route::get('tabel/add',[PortofolioController::class, 'add']);


// Route::get('login', [UserController::class, 'auth']);
Route::post('home', [UserController::class, 'show']);
// Route::get('Home', [HomeController::class, 'home']);

Route::get('contact',[ContactController::class, 'show']);
Route::post('contact/create',[ContactController::class, 'create']);
Route::get('contact/add',[ContactController::class, 'add']);
Route::get('contact/hapus/{id}',[ContactController::class, 'hapus']);
// Route::get('contact/edit/{id}',[ContactController::class, 'edit']);
Route::post('contact/update/{id}',[ContactController::class, 'update']);

