<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\About;
use App\Http\Livewire\Gallery;
use App\Http\Livewire\Product;
use App\Http\Livewire\ProductCategory;
use App\Http\Livewire\Service;
use App\Http\Livewire\Slider;
use App\Http\Livewire\Consultation;
use App\Http\Livewire\Index;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Setting;


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
//     return view('livewire.index');
// });

Route::view('/', 'index')->middleware('guest');

// Route::get('/home', function () {
//     return view('livewire.dashboard');
// });

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
Route::view('/dashboard', Dashboard::class);
Route::get('/home', Dashboard::class);
Route::get('/about', About::class);
Route::get('/gallery', Gallery::class);
Route::get('/product', product::class);
Route::get('/productcategory', ProductCategory::class);
Route::get('/service', Service::class);
Route::get('/slider', Slider::class);
Route::get('/consultation', Consultation::class);
Route::get('/setting', Setting::class);
});

