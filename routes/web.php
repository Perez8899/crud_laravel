<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\OptionsController;

Route::get('/', function () {
    return view('welcome');
});


//route categories
Route::get('categories.index', [CategoriesController::class, 'index'])
    ->name('index');

Route::get('categories/create', [CategoriesController::class, 'create'])
    ->name('categories.create');

Route::post('categories/create', [CategoriesController::class, 'store'])
    ->name('categories.store');

Route::resource('categories', CategoriesController::class);

//route options

Route::get('options.index', [OptionsController::class, 'index'])
    ->name('options.index');

Route::get('options/create', [OptionsController::class, 'create'])
    ->name('options.create');

Route::post('options/create', [OptionsController::class, 'store'])
    ->name('options.store');

Route::resource('options', OptionsController::class);