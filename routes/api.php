<?php

use App\Http\Controllers\{AuthController, TransactionController, UserController};
use Illuminate\Support\Facades\Route;

Route::post("/users", [UserController::class, "create"]);


Route::group([
    "prefix" => "auth"
], function () {
    Route::post("/login", [AuthController::class, "login"]);
});

Route::middleware("jwt.verify")->group(function() {
    Route::post("/users/{id}/deposits", [UserController::class, "deposit"]);
    Route::post("/transactions", [TransactionController::class, "create"]);
});