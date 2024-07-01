<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::prefix('/students')
    ->namespace('App\Http\Controllers')
    ->group(function () {
        Route::get('/', [StudentController::class, 'Index']);
        Route::get('/{student}', [StudentController::class, 'Show']);
        Route::post('/', [StudentController::class, 'Store']);
        Route::patch('/{student}', [StudentController::class, 'Update']);
        Route::delete('/{student}',[StudentController::class, 'Destroy']);
    });

Route::prefix('/groups')
    ->namespace('App\Http\Controllers')
    ->group(function (){
        Route::get('/', [GroupController::class, 'Index']);
        Route::get('/{group}/students', [GroupController::class, 'ShowStudents']);
        Route::get('/{group}/lections', [GroupController::class, 'ShowLections']);
        Route::post('/{group}/lections', [GroupController::class, '']);
        Route::post('/', [GroupController::class, 'Store']);
        Route::patch('/{group}/edit', [GroupController::class,'Update']);
        Route::delete('/{group}', [GroupController::class, 'Destroy']);

        Route::

    });
