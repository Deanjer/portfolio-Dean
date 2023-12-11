<?php

use App\Http\Livewire\Pages\Admin\AddUser;
use App\Http\Livewire\Pages\Admin\ViewUser;
use App\Http\Livewire\Pages\Admin\Projects;
// use App\Http\Controllers\Postcontroller;
use App\Http\Livewire\Pages\Dashboard;
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
    return view('homepage');
})->name('homepage');

Route::get('/dashboard', Dashboard::class)->middleware(['auth'])->name('dashboard');
Route::get('/admin/view-user', ViewUser::class)->middleware(['auth'])->name('view-user');
Route::get('/admin/add-user', AddUser::class)->middleware(['auth'])->name('add-user');
Route::get('/admin/projects', Projects::class)->middleware(['auth'])->name('projects');
// Route::get('/utilities/post', Postcontroller::class)->name('add-post');
// Route::get('/admin/view-post', Postcontroller::class)->name('view-post');

require __DIR__ . '/auth.php';