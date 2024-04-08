<?php

use App\User\AuthController;
use Illuminate\Support\Facades\Route;

Route::controller(AuthController::class)
->name("auth.")->prefix("auth")->group(function (){

    Route::post("/", "login");

    Route::middleware('auth:sanctum')->group(function () {

        Route::delete("/", 'logout');

    });

});
