<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TypeController;
use Illuminate\Support\Facades\Route;

//Rotta per l'index per i TYPE
Route::get('/', [TypeController::class, 'index'])->name('type.index');

//Rotta per l'index per i PROJECT
Route::get('/projects', [ProjectController::class, 'index'])->name('project.index');
