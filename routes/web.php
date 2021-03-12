<?php

use App\Http\Livewire\AddPostComponent;
use App\Http\Livewire\EditPostComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ViewPostComponent;
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
Route::get('/', function () {
    return view('test');
});



*/


Route::get('/',HomeComponent::class);
Route::get('/ViewPost',ViewPostComponent::class);
Route::get('/AddPost',AddPostComponent::class);
Route::get('/EditPost',EditPostComponent::class);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
