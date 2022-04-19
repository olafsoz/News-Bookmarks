<?php

use App\Http\Controllers\BookmarkController;
use App\Http\Controllers\WebController;
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

Route::get('/', [WebController::class, 'showAll']);
Route::get('/bookmarks', [BookmarkController::class, 'getBookmarks']);
Route::post('/makeBookmark', [BookmarkController::class, 'makeBookmark']);
Route::post('/deleteBookmark', [BookmarkController::class, 'deleteBookmark']);
