<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\StaticPageController;
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

Route::get('/', [StaticPageController::class, 'index'])->name('index');

Route::group([
    'middleware' => 'guest',
    'prefix' => 'auth',
    'as' => 'auth.'
], function () {
    Route::get('/', [AuthController::class, 'register'])->name('view');
    Route::post('/store', [AuthController::class, 'store'])->name('store');
    Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
});
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/about', [StaticPageController::class, 'about'])->name('about');

Route::get('/contact', [StaticPageController::class, 'contact'])->name('contact');
Route::post('/contact/feedback', [StaticPageController::class, 'feedback'])->name('contact.feedback');

Route::get('/recipes', [RecipeController::class, 'recipes'])->name('recipes');
Route::get('/recipes/{recipe}', [RecipeController::class, 'show'])->name('recipe');
Route::get('/tags', [RecipeController::class, 'tags'])->name('tags');
Route::get('/tags/{tag:tag}', [RecipeController::class, 'tag'])->name('tag');

Route::get('/premium', [RecipeController::class, 'premium'])->name('premium');
Route::get('/premium/{recipe}/payment', [RecipeController::class, 'payment'])->name('payment');
Route::post('/premium/{recipe}/payment/transaction', [RecipeController::class, 'transaction'])->name('payment.transaction');
