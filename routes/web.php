<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReplyController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\SubscriptionPlanController;
use App\Http\Controllers\Admin\ReplyController as AdminReplyController;
use App\Http\Controllers\Admin\ArticleController as AdminArticleController;
use App\Http\Controllers\Admin\QuestionController as AdminQuestionController;
use App\Http\Controllers\Admin\PredictController as AdminPredictController;
use App\Http\Controllers\User\ArticleController as UserArticleController;
use App\Http\Controllers\User\PredictController as UserPredictController;
use App\Http\Controllers\User\QuestionController as UserQuestionController;

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

Route::get('/', [LandingPageController::class, 'index'])->name('landing-page');

Route::resource('/guest/question', QuestionController::class)->only('index', 'show');

//Route::get('/article/{slug}', [ArticleController::class, 'showPage'])->name('guest.article.show');
Route::resource('/guest/article', ArticleController::class)->only('index', 'show');
Route::get('/subscription-plan', [SubscriptionPlanController::class, 'index'])->name('subscription.index');

Route::middleware('auth')->group(function () {
    // Ini buat route::get yg lain
    Route::get('/subscription-plan/detail-payment/{id}', [SubscriptionPlanController::class, 'paymentPage'])->name('subscriptionPlan.payment-page');
    Route::post('/subscription-plan/payment', [SubscriptionPlanController::class, 'payment'])->name('subscriptionPlan.payment');

    Route::resource('/question', QuestionController::class);

    Route::get('/question/{question}/reply/create', [ReplyController::class, 'create'])->name('reply.create');

    Route::resource('/reply', ReplyController::class)->except('create');
    Route::resource('/article', ArticleController::class);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::middleware('role:user')->group(function () {
        Route::get('/dashboard', function () {
            return view('user.dashboard');
        })->name('dashboard');

        //Route::middleware('checkUserSubscription')->name('user.')->group(function () {
        Route::middleware('checkUserSubscription')->name('user.')->group(function () {
            Route::get('/predict', [UserPredictController::class, 'index'])->name('predict.index');
            Route::post('/predict/process', [UserPredictController::class, 'prediction_stock'])->name('predict.process');
            Route::get('/predict/show', [UserPredictController::class, 'show'])->name('predict.show');

            Route::resource('/user/article', UserArticleController::class);
            Route::resource('/user/question', UserQuestionController::class);
        });
    });

    Route::middleware('role:admin')->prefix('admin')->name('admin.')->group(function () {
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');

        Route::view('about', 'admin.about')->name('about');
        Route::view('questions', 'admin.questions.index')->name('questions.index');

        Route::get('users', [UserController::class, 'index'])->name('users.index');

        Route::resource('/question', AdminQuestionController::class);
        Route::resource('/reply', AdminReplyController::class);
        Route::resource('/article', AdminArticleController::class);

        Route::get('/predict', [AdminPredictController::class, 'index'])->name('predict.index');
        Route::post('/predict/process', [AdminPredictController::class, 'prediction_stock'])->name('predict.process');
        Route::get('/predict/show', [AdminPredictController::class, 'show'])->name('predict.show');
    });
});

// Article =  user_id, thumbnail, title, article_body, bookmark, created_date, vote_like



require __DIR__.'/auth.php';
