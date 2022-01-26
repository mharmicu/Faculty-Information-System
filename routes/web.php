<?php

use App\Http\Livewire\PersonalInfos;
use App\Http\Livewire\SalaryLivewire;
use App\Http\Livewire\ViewOnlyTableLivewire;
use App\Http\Middleware\AuthAdmin;
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
})->name('welcome');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//Personal info
Route::middleware(['authadmin'])->group(function () {
    Route::get('personal_infos',PersonalInfos::class)->name('personal_infos');
});

Route::middleware(['authadmin', 'password.confirm'])->group(function () {
    Route::get('salary',SalaryLivewire::class)->name('salary');
});

//ViewTableOnly
Route::get('view_only', ViewOnlyTableLivewire::class)
->middleware(['auth:sanctum', 'verified'])
->name('view_only');

