<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Home;
use App\Http\Controllers\Users;
use App\Http\Controllers\Tests;
use App\Http\Controllers\Matches;
use App\Http\Controllers\Heroes;
use App\Http\Controllers\Areas;
use App\Http\Controllers\Courses;

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

Route::get('/', [Home::class, 'index'])->name('home');

Route::get('/signup', [Users::class, 'create'])->name('signup');
Route::post('/signup', [Users::class, 'store'])->name('setUser');
Route::get('/profile/{id}', [Users::class, 'show'])->name('profile');

Route::get('/quiz', [Tests::class, 'create'])->name('quiz');
Route::post('/quiz', [Tests::class, 'store'])->name('setQuiz');

Route::get('/match', [Matches::class, 'index'])->name('match');

Route::get('/hero/{slug}', [Heroes::class, 'show'])->name('getHero');

Route::get('/area/{slug}', [Areas::class, 'show'])->name('getArea');

Route::get('/course/{slug}', [Courses::class, 'show'])->name('getCourse');