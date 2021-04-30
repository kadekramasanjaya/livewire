<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Musiks;
use App\Http\Livewire\DashboardMusik;

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

Route::get('musiks', Musiks::class);
Route::get('dashboardmusik', DashboardMusik::class);
Route::get('/', function () {
    return view('welcome');
});

// ROUTES
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('livewire.dashboardmusik', function () {
    return view('livewire.dashboardmusik');
})->name('livewire.dashboardmusik');