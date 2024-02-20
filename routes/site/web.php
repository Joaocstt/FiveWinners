<?php

use App\Http\Controllers\Site\Auth\UserController;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\SchoolController;
use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::group(['as' => 'site.'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('login', [HomeController::class, 'login'])->name('login');
    Route::get('{school}', [SchoolController::class, 'getScores'])
        ->where('school', 'sebastiao-pedrosa|boa-uniao')->name('school');
    Route::post('login-do', [UserController::class, 'attempt'])->name('login.do')->middleware('throttle:8,1');
    Route::get('logout', [UserController::class, 'logout'])->name('logout');

    Route::group(['middleware' => 'auth'], function () {
        Route::get('perfil', [HomeController::class, 'profile'])->name('profile');
        Route::post('profile-do', [HomeController::class,'store'])->name('profile-do');
        Route::get('alunos', [HomeController::class, 'contact'])->name('contacts');
        Route::get('detalhe-perfil/{id}', [HomeController::class, 'detailProfile'])->name('detailProfile');
        Route::get('guia', [HomeController::class, 'guide'])->name('guide');
        Route::get('duvidas', [HomeController::class, 'faq'])->name('faq');
        Route::get('slides', [HomeController::class, 'slide'])->name('slide');

    });
});
