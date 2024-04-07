<?php

use Illuminate\Support\Facades\Route;

use App\Book\BookController;

Route::controller(BookController::class)
->name("book.")->prefix("book")->group(function (){
        Route::get("/", 'getAll');
        Route::post("/", 'create');
        Route::post("/assign/store", 'assignToStore');
        Route::put("/{book_id}", 'update');
        Route::delete("/{book_id}", 'destroy');
});
