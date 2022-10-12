<?php

use App\Http\Controllers\Contorller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller as RoutingController;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\HomepageController;


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
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('', function () {
    return view('homepage.index');
    });

Route::get('/latihan', [LatihanController::class, 'home']);
Route::get('/beranda', [LatihanController::class, 'beranda']);
Route::get('/homepage', [HomepageController::class, 'index']);
Route::get('/about', [HomepageController::class, 'about']);
Route::get('/kontak', [HomepageController::class, 'kontak']);
Route::get('/kategori', [HomepageController::class, 'kategori']);


