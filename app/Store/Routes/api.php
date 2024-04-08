<?php

use Illuminate\Support\Facades\Route;

use App\Store\StoreController;

Route::middleware('auth:sanctum')
->controller(StoreController::class)->name("store.")
->prefix("store")->group(function (){

    Route::get("/", 'getAll');
    Route::post("/", 'create');
    Route::post("/assign/book", 'assignBooks');
    Route::put("/{store_id}", 'update');
    Route::delete("/{store_id}", 'destroy');

});
