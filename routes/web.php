<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RepliesController;
use App\Http\Controllers\ThreadsController;

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
    return view('welcome');
})->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/threads', [ThreadsController::class, 'index'])->name('threads');
Route::get('/threads/{thread}', [ThreadsController::class, 'show']);
Route::post('/threads/{thread}/replies', [RepliesController::class, 'store']);
