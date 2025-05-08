<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

Route::get('/', [ItemController::class, 'index']);
Route::post('/items', [ItemController::class, 
'store'])->name('items.store');
Route::delete('/items/{item}', [ItemController::class, 
'destroy'])->name('items.destroy');
