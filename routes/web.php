<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartaController;

Route::get('/carta/update/{id?}', [CartaController::class, 'update']);

Route::get('/', function(){
    return view('teste');
});
