<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PersonagemController;

Route::get('/index', [PersonagemController::class, 'index']);

Route::post('/store', [PersonagemController::class, 'store']);

Route::get('/show/{id}', [PersonagemController::class, 'show']);

Route::put('/update/{id}', [PersonagemController::class, 'update']);

Route::delete('/delete/{id}', [PersonagemController::class, 'delete']);