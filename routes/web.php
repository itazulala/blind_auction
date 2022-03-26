<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. Thesess
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

// TOP画面
Route::get('/top', function () {
    return Inertia::render('Top', [
    ]);
});
// 商品一覧画面
Route::get('/itemlist', function () {
    return Inertia::render('ItemList', [
    ]);
});
// ユーザー登録画面
Route::get('/signin', function () {
    return Inertia::render('Signin', [
    ]);
});
// ログイン画面
Route::get('/login', function () {
    return Inertia::render('Login', [
    ]);
});
// コンソール画面
Route::get('/console', function () {
    return Inertia::render('Console', [
    ]);
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');
