<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\eradivisieController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('api/standing', [eradivisieController::class,'getAllTeams']);
