<?php

use Apps\Controllers\HomeController;
use Apps\Controllers\LoginController;
use Lib\Http\Request;
use Lib\Http\Route;
use Lib\Http\Sessions;

Route::get("/", HomeController::class)->name("home");

Route::get("/login", [LoginController::class, "login"])->name("login");