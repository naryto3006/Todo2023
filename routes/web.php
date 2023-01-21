<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskConroller;

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
    return view('auth.login');
});Route::get('/dashboard', [TaskConroller::class,'dashboard'])
->middleware(['auth'])->name('dashboard');


Route::get('/tasks/create', [TaskConroller::class,'create'])
    ->middleware(['auth'])->name('task.create');
   
   
Route::get('/tasks/{task}/edit', [TaskConroller::class,'edit'])
    ->middleware(['auth'])->name('task.edit');
   
Route::post('/tasks',[TaskConroller::class, 'store'])
    ->middleware(['auth'])->name('task.store');
   
Route::put('/tasks/{task}/update',[TaskConroller::class, 'update'])
    ->middleware(['auth'])->name('task.update');
   
   
require __DIR__.'/auth.php';

	
	
	
	