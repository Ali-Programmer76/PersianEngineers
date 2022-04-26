<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\Front\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth', 'admin'])->resource('/dashboard/users', App\Http\Controllers\Administrator\UserController::class)->parameters(['users' => 'id']);
Route::middleware(['auth', 'admin'])->resource('/dashboard/seo', App\Http\Controllers\Administrator\SeoController::class)->parameters(['seo' => 'id']);
Route::middleware(['auth', 'admin'])->resource('/dashboard/topHeader', App\Http\Controllers\Administrator\TopHeaderController::class)->parameters(['topHeader' => 'id']);
Route::middleware(['auth', 'admin'])->resource('/dashboard/home', App\Http\Controllers\Administrator\HeroController::class)->parameters(['home' => 'id']);
Route::middleware(['auth', 'admin'])->resource('/dashboard/about', App\Http\Controllers\Administrator\AboutController::class)->parameters(['about' => 'id']);
Route::middleware(['auth', 'admin'])->resource('/dashboard/introduction', App\Http\Controllers\Administrator\IntroductionController::class)->parameters(['introduction' => 'id']);
Route::middleware(['auth', 'admin'])->resource('/dashboard/service', App\Http\Controllers\Administrator\ServiceController::class)->parameters(['service' => 'id']);
Route::middleware(['auth', 'admin'])->resource('/dashboard/counter', App\Http\Controllers\Administrator\CounterController::class)->parameters(['counter' => 'id']);
Route::middleware(['auth', 'admin'])->resource('/dashboard/team', App\Http\Controllers\Administrator\TeamController::class)->parameters(['team' => 'id']);

require __DIR__ . '/auth.php';
