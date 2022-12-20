<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\SearchController;
use App\Http\Controllers\BoardController;
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
});

Route::get('/hello', function () {
    return view('hello', [
        'name' => '도라에몽'
    ]);
});

Route::get('/naver', function () {
    return view('naver');
});


// Route::get('/form', function () {
//     return view('form');
// });
Route::get('/form', [SearchController::class, 'form']);

Route::post('/search', [SearchController::class, 'store']);
Route::get('/search', [SearchController::class, 'search']);


// Route::get('/search', function (Request $request) {
//     $search = $request->input('search');
//     return view('search', [
//         'search' => $search
//     ]);
// });

// Route::get('/boards', function () {
//     return view('boards.index');
// });

// Route::get('/boards/create', function () {
//     return view('boards.create');
// });

Route::get('/', function () {
    return view('home');
}) -> name('home');


Route::get('boards', [BoardController::class, 'index']) -> name('boards.index');
Route::get('boards/create', [BoardController::class, 'create']) -> name('boards.create');
Route::post('boards', [BoardController::class, 'store']) -> name('boards.store');