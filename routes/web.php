<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DashboardMemberController;
use App\Http\Controllers\Admin\DashboardNewsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//home
Route::get('/', [HomeController::class, 'index']);
Route::get('/news', [HomeController::class, 'news']);
Route::get('/news/{news:slug}', [HomeController::class, 'newsDetail']);
Route::get('/organization-structure', [HomeController::class, 'organizationStructure']);
Route::get('/members', [HomeController::class, 'members']);

//member
Route::get('/register', [MemberController::class, 'create'])->name('member.create');
Route::post('/register', [MemberController::class, 'store'])->name('member.store');
Route::get('/register/member/{id}', [MemberController::class, 'memberType'])->name('member.type');

//auth
Route::get('/login', [AuthController::class, 'login'])->middleware('guest')->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');

//dashboard
Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function () {
    Route::get('/', [DashboardController::class, 'index']);
    Route::get('/members', [DashboardMemberController::class, 'index']);
    Route::get('/members/{member:remember_token}', [DashboardMemberController::class, 'show'])->name('dashborad.member.detail');
    Route::get('/members/document/{document}', [DashboardMemberController::class, 'getDocument'])->name('dashborad.member.detail.document');
    Route::get('/members/document/{document}/download', [DashboardMemberController::class, 'downloadDocument'])->name('dashborad.member.detail.document.download');

    Route::get('/news', [DashboardNewsController::class, 'index']);
    Route::post('/news', [DashboardNewsController::class, 'store'])->name('news.store');
    Route::get('/news/{news:slug}', [DashboardNewsController::class, 'show'])->name('news.show');
    Route::put('/news/{news:slug}', [DashboardNewsController::class, 'update'])->name('news.update');
    Route::get('/news/{news:slug}/get', [DashboardNewsController::class, 'getNews'])->name('news.get');
    Route::delete('/news/{news:slug}', [DashboardNewsController::class, 'destroy'])->name('news.destroy');
});
