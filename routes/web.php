<?php

use App\Http\Livewire\Pages\Admin\AddUser;
use App\Http\Livewire\Pages\Admin\ViewUser;
use App\Http\Livewire\Pages\Admin\Projects;
use App\Models\Project;
use App\Http\Controllers\ProjectController;
// use App\Http\Controllers\Postcontroller;
use App\Http\Livewire\Pages\Dashboard;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View;



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

 Route::get('/', function (): View {
    $projects = Project::all();
    return view('homepage', ['projects' => $projects]);
})->name('homepage');

Route::get('/dashboard', Dashboard::class)->middleware(['auth'])->name('dashboard');
Route::get('/admin/view-user', ViewUser::class)->middleware(['auth'])->name('view-user');
Route::get('/admin/add-user', AddUser::class)->middleware(['auth'])->name('add-user');
Route::get('/admin/projects', Projects::class)->middleware(['auth'])->name('projects');

Route::get('project/{id}', [ProjectController::class, 'show'])->name('project.detail');




// Route::get('/utilities/post', Postcontroller::class)->name('add-post');
// Route::get('/admin/view-post', Postcontroller::class)->name('view-post');

require __DIR__ . '/auth.php';

// Route::get('storage/{filename}', function ($filename) {
//     $path = storage_path('app/public/uploads/projects/' . $filename);

//     if (!file_exists($path)) {
//         abort(404);
//     }

//     return response()->file($path);
// })->where('filename', '.*');

