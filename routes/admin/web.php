<?php


use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\UserControllerBU;
use Illuminate\Support\Facades\Route;


Route::group(['as' => 'admin.', 'middleware' => ['auth', 'verifyIsAdmin']], function () {
    Route::group(['prefix' => 'admin/sebastiao-pedrosa'], function () {
        Route::get('estudantes', [UserController::class, 'index'])->name('sebastiao-pedrosa.users');
        Route::get('criar-estudante', [UserController::class, 'create'])->name('sebastiao-pedrosa.create');
        Route::post('store', [UserController::class, 'store'])->name('sebastiao-pedrosa.store');
        Route::get('editar-usuario/{id}', [UserController::class, 'edit'])->name('sebastiao-pedrosa.edit');
        Route::put('update/{id}', [UserController::class, 'update'])->name('sebastiao-pedrosa.update');
        Route::get('excluir/{id}', [UserController::class, 'delete'])->name('sebastiao-pedrosa.delete');
        Route::delete('destroy/{id}', [UserController::class, 'destroy'])->name('sebastiao-pedrosa.destroy');
    });
    Route::group(['prefix' => 'admin/boa-uniao'], function () {
        Route::get('estudantes', [UserControllerBU::class, 'index'])->name('boa-uniao-users');
        Route::get('criar-estudante', [UserControllerBU::class, 'create'])->name('boa-uniao.create');
        Route::post('store', [UserControllerBU::class, 'store'])->name('boa-uniao.store');
        Route::get('editar-usuario/{id}', [UserControllerBU::class, 'edit'])->name('boa-uniao.edit');
        Route::put('update/{id}', [UserControllerBU::class, 'update'])->name('boa-uniao.update');
        Route::get('excluir/{id}', [UserControllerBU::class, 'delete'])->name('boa-uniao.delete');
        Route::delete('destroy/{id}', [UserControllerBU::class, 'destroy'])->name('boa-uniao.destroy');
    });
});



