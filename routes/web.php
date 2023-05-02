<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ReplyController;
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
    return view('pages.welcome');
});

Route::view('/question', 'pages.question.index')->name('quest.question.index');
Route::get('/question/{uuid}/replies', [ReplyController::class, 'show'])->name('quest.reply.show');

Route::middleware('auth')->group(function () {
    // Ini buat route::get yg lain
    //Route::resource('/question/{uuid}', QuestionController::class);
    //Route::resource('/question/{uuid}/replies', ReplyController::class);

    Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');

        Route::view('about', 'admin.about')->name('about');
        Route::view('questions', 'admin.questions.index')->name('questions.index');

        Route::get('users', [UserController::class, 'index'])->name('users.index');

        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

        Route::resource('question', QuestionController::class);
    });

});

require __DIR__.'/auth.php';
