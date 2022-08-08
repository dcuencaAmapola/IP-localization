<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use ipinfo\ipinfo\IPinfo;
use App\Http\Controllers\UserController;


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

Route::get('display-user', [UserController::class, 'index'])->name('user1');
Route::get('display-user2', [UserController::class, 'ipInfo'])->name('user2');

Route::get('/', function (Request $request) {
    $location_text = "The IP address {$request->ipinfo->ip}.";
    return view('index', ['location' => $location_text]);
});
