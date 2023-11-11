<?php

use App\Http\Controllers\PageController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [PageController::class, 'index']);

Route::get('/about-us', [PageController::class, 'about_us']);

Route::get('/services', [PageController::class, 'services']);

Route::get('/our-projects', [PageController::class, 'our_projects']);

Route::get('/blog', [PageController::class, 'blog']);

Route::get('/post/{post-slug}', [PageController::class, 'post']);

Route::get('/contact-us', [PageController::class, 'contact_us']);





