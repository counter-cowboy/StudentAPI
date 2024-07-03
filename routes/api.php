<?php

use App\Http\Controllers\GroupController;
use App\Http\Controllers\LectionController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;


Route::prefix('/students')->group(function () {
    Route::get('/', [StudentController::class, 'Index']);
    Route::get('/{student}', [StudentController::class, 'Show']);
    Route::post('/', [StudentController::class, 'Store']);
    Route::patch('/{student}', [StudentController::class, 'Update']);
    Route::delete('/{student}', [StudentController::class, 'Destroy']);
});

Route::prefix('/groups')->group(function () {
    Route::get('/', [GroupController::class, 'Index']); //6
    Route::get('/{group}/students', [GroupController::class, 'ShowStudents']); //7
    Route::get('/{group}/lections', [GroupController::class, 'ShowLections']); // 8
    Route::post('/{group}/lections', [GroupController::class, 'StoreLections']); //9
    Route::patch('/{group}/lections', [GroupController::class, 'UpdateLections']); //9
    Route::post('/', [GroupController::class, 'Store']);                        //10
    Route::patch('/{group}/edit', [GroupController::class, 'Update']); //11
    Route::delete('/{group}', [GroupController::class, 'Destroy']); //12
});

Route::prefix('/lections')->group(function () {
    Route::get('/', [LectionController::class, 'Index']); //13
    Route::get('/{lection}', [LectionController::class, 'Show']); //14
    Route::post('/', [LectionController::class, 'Store']); //15
    Route::patch('/{lection}', [LectionController::class, 'Update']); //16
    Route::delete('/{lection}', [LectionController::class, 'Destroy']); //17
});
