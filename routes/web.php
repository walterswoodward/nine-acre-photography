<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', function () {
    return Inertia::render('Landing', [
        // 'canLogin' => Route::has('login'),
        // 'canRegister' => Route::has('register'),
        'canLogin' => false,
        'canRegister' => false,
        'canWork' => Route::has('work'),
        'canStory' => Route::has('story'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});



Route::get('/home', function () {
    return Inertia::render('Home');
})->name('home');

Route::get('/story', function () {
    return Inertia::render('Story');
})->name('story');

Route::get('/work', function () {
    return Inertia::render('Work');
})->name('work');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// require __DIR__.'/auth.php';
