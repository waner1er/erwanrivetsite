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
Route::get('/page/{slug}', [PageController::class, 'show'])->name('pages.show');


Route::get('/contact', [PageController::class, 'contact'])->name('pages.contact');
Route::get('/admin', function () {
    return redirect()->route('filament.auth.login');
})->name('admin');

Route::get('/blog/categories/{category:slug}', [PostController::class, 'category'])->name('posts.category');
