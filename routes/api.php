<?php

use App\Http\Controllers\BuildingController;
use App\Http\Controllers\BuildingTypeController;
use Illuminate\Support\Facades\Route;

// Building types
Route::get('building-type', [BuildingTypeController::class, 'index'])
    ->name('building-type.index');
Route::get('building-type/{building_type}', [BuildingTypeController::class, 'show'])
    ->name('building-type.show');

Route::post('building-type', [BuildingTypeController::class, 'store'])
    ->name('building-type.store');

Route::put('building-type/{building_type}', [BuildingTypeController::class, 'update'])
    ->name('building-type.update');
Route::patch('building-type/{building_type}', [BuildingTypeController::class, 'update'])
    ->name('building-type.update');

Route::delete('building-type/{building_type}', [BuildingTypeController::class, 'destroy'])
    ->name('building-type.delete');

// Buildings
Route::group(['prefix' => 'building', 'as' => 'building.'], function () {
    Route::get('/', [BuildingController::class, 'index'])
        ->name('index');
    Route::get('/{building}', [BuildingController::class, 'show'])
        ->name('show');

    Route::post('/', [BuildingController::class, 'store'])
        ->name('store');

    Route::put('/{building}', [BuildingController::class, 'update'])
        ->name('update');
    Route::patch('/{building}', [BuildingController::class, 'update'])
        ->name('update');

    Route::delete('/{building}', [BuildingController::class, 'destroy'])
        ->name('destroy');
});
