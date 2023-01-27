<?php


use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
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

Route::get('/', [PageController::class, 'index'])->name('pages.index');
Route::get('/{slug}', [PageController::class, 'show'])->name('pages.show');

//aucune nouvelle route ne fonctionne !!!
///TODO: trouver une solution pour que les routes soient bien chargées
Route::get('/blog',[PostController::class, 'index'])->name('posts.index');
