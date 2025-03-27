<?php

use Apps\Controllers\DashboardController;
use Apps\Controllers\HomeController;
use Apps\Controllers\LoginController;
use Apps\Middleware\Auth;
use Lib\Http\Route;

Route::get("/", HomeController::class)->name("home");

Route::get("/login", [LoginController::class, "index"]);

Route::post("/login", [LoginController::class, "login"])->name("login");
 
Route::get("/dashboard", DashboardController::class)->middleware(Auth::class)->name("dashboard");

