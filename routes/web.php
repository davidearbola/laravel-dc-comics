<?php

use App\Http\Controllers\ComicController;
use App\Models\Comic;
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

Route::get('/', function () {
    $comicList = Comic::all();
    $dati = [
        'store' => config('store'),
        'comics' => $comicList
    ];
    return view('comics.index', $dati);
})->name("home");

Route::resource('/comics', ComicController::class);
